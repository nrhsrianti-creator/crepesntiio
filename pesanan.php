<?php

require_once 'koneksi.php';


$kode = $_GET['kode'] ?? '';


if(empty($kode)){
    die("Kode pesanan tidak ditemukan");
}



$stmt = $conn->prepare(
    "SELECT * FROM pelacakan_pesanan 
     WHERE kode_pesanan = ?"
);


$stmt->bind_param("s",$kode);

$stmt->execute();


$data = $stmt->get_result()->fetch_assoc();


if(!$data){

    die("Pesanan tidak ditemukan");

}



$status = $data['status'];



$status_list = [

"Pesanan Dibuat" => 
"Pesanan berhasil diterima sistem.",


"Pembayaran Dikonfirmasi" => 
"Pembayaran sudah diverifikasi.",


"Sedang Diproses" => 
"Pesanan sedang dibuat oleh admin.",


"Siap Diambil" => 
"Pesanan siap diambil oleh pembeli.",


"Dalam Pengantaran" => 
"Pesanan sedang dikirim ke alamat tujuan.",


"Selesai" => 
"Pesanan telah diterima pembeli."

];



$urutan_status = array_keys($status_list);


$aktif = array_search($status, $urutan_status);



?>



<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Status Pesanan | Crepes n'Co</title>



<style>


*{

margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;

}



body{

background:#fffdf7;
color:#173f63;

}



.container{

width:90%;
max-width:700px;
margin:50px auto;

}



.card{

background:white;
padding:35px;
border-radius:25px;
box-shadow:0 8px 25px rgba(0,0,0,.1);

}



h1{

font-size:38px;
margin-bottom:25px;

}



h1 span{

color:#e52f7c;

}



.info{

background:#fff8e5;
padding:20px;
border-radius:20px;
line-height:1.8;
margin-bottom:35px;

}



.timeline{

margin-top:20px;

}



.item{

display:flex;
gap:20px;
position:relative;
margin-bottom:35px;

}



.item:not(:last-child)::after{

content:"";

position:absolute;

left:8px;

top:20px;

height:55px;

border-left:3px solid #ddd;

}



.item.active:not(:last-child)::after{

border-color:#20b968;

}



.dot{

width:18px;
height:18px;
border-radius:50%;
background:#aaa;
flex-shrink:0;
margin-top:5px;

}



.item.active .dot{

background:#20b968;

}



.item.active b{

color:#20b968;

}



.desc{

margin-top:5px;
color:#666;
font-size:14px;

}



.done{

color:#20b968;
font-size:14px;
font-weight:bold;

}



.back{

display:inline-block;
margin-top:20px;
background:#173f63;
color:white;
padding:12px 25px;
border-radius:30px;
text-decoration:none;

}


</style>


</head>



<body>


<div class="container">


<div class="card">



<h1>
📦 Status <span>Pesanan</span>
</h1>




<div class="info">


<b>Kode Pesanan :</b>

<?= htmlspecialchars($data['kode_pesanan']); ?>


<br>


<b>Produk :</b>

<?= nl2br(htmlspecialchars($data['detail_pesanan'])); ?>


<br>


<b>Total :</b>

Rp <?= number_format($data['total'],0,',','.'); ?>


<br>


<b>Status Saat Ini :</b>

<?= htmlspecialchars($status); ?>


</div>





<div class="timeline">



<?php foreach($status_list as $nama_status=>$deskripsi): ?>


<?php

$index = array_search($nama_status,$urutan_status);

$selesai = ($index <= $aktif);

?>



<div class="item <?= $selesai ? 'active':'' ?>">



<div class="dot"></div>




<div>


<b>
<?= $nama_status ?>
</b>


<div class="desc">

<?= $deskripsi ?>

</div>



<?php if($selesai): ?>

<div class="done">

✓ Selesai

</div>

<?php endif; ?>


</div>



</div>



<?php endforeach; ?>



</div>



<a href="riwayat.php" class="back">

← Kembali ke Riwayat

</a>



</div>


</div>


</body>

</html>