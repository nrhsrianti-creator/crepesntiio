<?php

session_start();

require_once 'koneksi.php';


// ambil data form

$id_produk = $_POST['produk_id'] ?? '';

$nama_user = $_POST['nama_user'] ?? '';

$rating = $_POST['rating'] ?? '';

$komentar = $_POST['komentar'] ?? '';





// cek data

if(
    empty($id_produk) ||
    empty($nama_user) ||
    empty($rating) ||
    empty($komentar)
){

    die("Data ulasan belum lengkap");

}






$query = mysqli_query($conn,


"INSERT INTO ulasan

(
id_produk,
nama_user,
rating,
komentar,
tanggal
)

VALUES

(
'$id_produk',
'$nama_user',
'$rating',
'$komentar',
NOW()
)

"

);







if($query){


    header("Location: detail_produk.php?id=".$id_produk);

    exit;


}else{


    echo "Gagal menyimpan ulasan : " . mysqli_error($conn);


}



?>