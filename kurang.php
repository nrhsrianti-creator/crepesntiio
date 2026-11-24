<?php

session_start();


// ambil id produk dari tombol -
$id = $_GET['id'];


// cek apakah produk ada di keranjang
if(isset($_SESSION['keranjang'][$id])){


    // jika jumlah lebih dari 1, kurangi
    if($_SESSION['keranjang'][$id]['jumlah'] > 1){

        $_SESSION['keranjang'][$id]['jumlah']--;

    } 
    else {

        // jika jumlah tinggal 1, hapus produk
        unset($_SESSION['keranjang'][$id]);

    }

}


// kembali ke halaman keranjang
header("location:keranjang.php");

exit;

?>