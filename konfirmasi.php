
<?php
session_start();
require_once 'koneksi.php';

if (!isset($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = [];
}

if (empty($_SESSION['keranjang'])) {
    header("Location: keranjang.php");
    exit;
}

$total = 0;
$daftar_item = [];

foreach ($_SESSION['keranjang'] as $item) {
    $harga = (float)$item['harga'];
    $jumlah = (int)$item['jumlah'];
    $subtotal = $harga * $jumlah;

    $total += $subtotal;

    $daftar_item[] = $item['nama']
        . " x " . $jumlah
        . " = Rp " . number_format($subtotal, 0, ',', '.');
}

$metode = $_GET['metode']
    ?? $_SESSION['metode_pembayaran']
    ?? 'Belum dipilih';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $metode = $_SESSION['metode_pembayaran']
        ?? $_POST['metode']
        ?? 'Belum dipilih';

    // Mencegah pembuatan pesanan ulang saat halaman
    // dimuat ulang setelah pesanan berhasil dibuat.
    if (!empty($_SESSION['kode_pesanan_aktif'])) {
        $kode = $_SESSION['kode_pesanan_aktif'];

        $cek = $conn->prepare(
            "SELECT kode_pesanan FROM pelacakan_pesanan
             WHERE kode_pesanan = ?"
        );
        $cek->bind_param("s", $kode);
        $cek->execute();
        $ada = $cek->get_result()->fetch_assoc();
        $cek->close();
    } else {
        $ada = false;
    }

    if (empty($ada)) {
        $kode = 'CNC-' . date('YmdHis')
            . '-' . random_int(100, 999);

        // Gunakan detail pesanan dari keranjang.
        $detail = implode("\n", $daftar_item);

        // Data pembeli dilengkapi pada tahap checkout.
        $nama = $_SESSION['nama_pemesan'] ?? 'Belum diisi';
        $wa = $_SESSION['no_whatsapp'] ?? '';
        $alamat = $_SESSION['alamat'] ?? '';

        $stmt = $conn->prepare(
            "INSERT INTO `pelacakan_pesanan`
            (kode_pesanan, nama_pemesan, no_whatsapp,
             alamat, detail_pesanan, metode_pembayaran,
             total, status)
            VALUES (?, ?, ?, ?, ?, ?, ?,
                    'Pesanan Dibuat')"
        );

        $stmt->bind_param(
            "ssssssd",
            $kode,
            $nama,
            $wa,
            $alamat,
            $detail,
            $metode,
            $total
        );

        if (!$stmt->execute()) {
            $error = 'Pesanan belum berhasil disimpan. Silakan coba lagi.';
        }

        $stmt->close();
    }

    if ($error === '') {
        $_SESSION['kode_pesanan_aktif'] = $kode;

        $teks = "Halo Crepes n'Co!\n"
            . "Saya ingin memesan:\n"
            . implode("\n", $daftar_item)
            . "\nTotal: Rp " . number_format($total, 0, ',', '.')
            . "\nMetode pembayaran: " . $metode
            . "\nKode pesanan: " . $kode;

        $url = "https://wa.me/6282189799599?text="
            . rawurlencode($teks);

        header("Location: " . $url);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konfirmasi Pesanan | Crepes n'Co</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #fffdf7;
    color: #173f63;
}

.container {
    width: 90%;
    max-width: 900px;
    margin: auto;
    padding: 50px 0;
}

h1 {
    font-size: 42px;
    margin-bottom: 30px;
}

h1 span {
    color: #e52f7c;
}

.box {
    background: white;
    padding: 35px;
    border-radius: 25px;
    box-shadow: 0 8px 25px rgba(0,0,0,.08);
    margin-bottom: 25px;
}

h2 {
    margin-bottom: 20px;
}

.item {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    padding: 15px 0;
    border-bottom: 1px solid #eee;
}

.total {
    font-size: 32px;
    font-weight: bold;
    color: #e52f7c;
    margin-top: 20px;
}

.metode {
    background: #fff8e5;
    padding: 20px;
    border-radius: 20px;
    font-size: 20px;
    font-weight: bold;
}

.btn {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    margin-top: 30px;
}

.kembali, .kirim {
    display: inline-block;
    border: none;
    padding: 15px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: bold;
    cursor: pointer;
    font-size: 15px;
}

.kembali {
    background: #173f63;
    color: white;
}

.kirim {
    background: #20b968;
    color: white;
}

.error {
    color: #d21e4b;
    margin-bottom: 15px;
}

@media (max-width: 600px) {
    h1 { font-size: 32px; }
    .box { padding: 22px; }
    .total { font-size: 26px; }
}
</style>
</head>

<body>
<div class="container">

<h1>Konfirmasi <span>Pesanan</span></h1>

<div class="box">
    <h2>🛒 Detail Pesanan</h2>

    <?php foreach ($_SESSION['keranjang'] as $item): ?>
    <div class="item">
        <span>
            <?= htmlspecialchars($item['nama']) ?>
            (x<?= (int)$item['jumlah'] ?>)
        </span>

        <strong>
            Rp <?= number_format(
                $item['harga'] * $item['jumlah'],
                0, ',', '.'
            ) ?>
        </strong>
    </div>
    <?php endforeach; ?>

    <div class="total">
        Total: Rp <?= number_format($total, 0, ',', '.') ?>
    </div>
</div>

<div class="box">
    <h2>💳 Metode Pembayaran</h2>
    <div class="metode">
        <?= htmlspecialchars($metode) ?>
    </div>
</div>

<?php if ($error): ?>
    <p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<div class="btn">
    <a href="keranjang.php" class="kembali">← Kembali</a>

    <form method="POST">
        <input type="hidden" name="metode"
               value="<?= htmlspecialchars($metode) ?>">

        <button type="submit" class="kirim">
            ✅ Simpan & Kirim Pesanan
        </button>
    </form>
</div>

</div>
</body>
</html>
