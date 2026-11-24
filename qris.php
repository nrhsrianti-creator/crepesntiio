<?php

session_start();


if(!isset($_SESSION['keranjang']) || empty($_SESSION['keranjang'])){

    header("location:menu.php");
    exit;

}



$total=0;


foreach($_SESSION['keranjang'] as $item){

    $total += $item['harga']*$item['jumlah'];

}


?>


<!DOCTYPE html>

<html lang="id">

<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Pembayaran QRIS | Crepes n'Co</title>



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

max-width:900px;

margin:auto;

padding:50px 0;

}





h1{

font-size:42px;

margin-bottom:30px;

}



h1 span{

color:#e52f7c;

}





.box{

background:white;

padding:35px;

border-radius:25px;

box-shadow:0 8px 25px rgba(0,0,0,.08);

margin-bottom:25px;

text-align:center;

}





.icon{

font-size:50px;

margin-bottom:15px;

}





.total-box{

background:#fff8e5;

padding:25px;

border-radius:20px;

margin-top:20px;

}



.total-title{

font-size:18px;

}



.total{

font-size:38px;

font-weight:bold;

color:#e52f7c;

margin-top:10px;

}







.qris-box{

margin-top:25px;

background:#fafafa;

padding:25px;

border-radius:20px;

border:2px dashed #e52f7c;

}



.qris-box img{


width:280px;

max-width:100%;

margin:20px auto;

display:block;


}





.info{


background:#ffe6ef;

padding:20px;

border-radius:20px;

line-height:1.7;

margin-top:20px;


}





.btn{


display:inline-block;

margin-top:30px;

padding:15px 35px;

border-radius:30px;

text-decoration:none;

font-weight:bold;

}



.konfirmasi{

background:#20b968;

color:white;

}



.kembali{

background:#ffcf24;

color:#173f63;

margin-left:10px;

}



@media(max-width:600px){


.btn{

display:block;

margin-left:0;

text-align:center;

}



}



</style>


</head>



<body>



<div class="container">






<h1>

📱 Pembayaran <span>QRIS</span>

</h1>








<div class="box">



<div class="icon">

📱

</div>



<h2>

Scan QRIS Crepes n'Co

</h2>





<div class="total-box">


<div class="total-title">

Total pembayaran:

</div>



<div class="total">

Rp <?=number_format($total);?>

</div>



</div>







<div class="qris-box">


<p>

Silakan scan kode QR berikut menggunakan aplikasi pembayaran Anda.

</p>



<img src="gambar/qris.png" alt="QRIS Crepes n'Co">



</div>







<div class="info">


<b>Petunjuk Pembayaran:</b>

<br><br>


✓ Scan QRIS menggunakan aplikasi e-wallet / mobile banking.

<br>

✓ Pastikan nominal sesuai dengan total pesanan.

<br>

✓ Setelah pembayaran berhasil, klik tombol "saya sudah bayar".


</div>







<a 

href="konfirmasi.php?metode=QRIS"

class="btn konfirmasi">

✅ Saya Sudah Bayar

</a>




<a 

href="pembayaran.php"

class="btn kembali">

← Kembali

</a>






</div>







</div>





</body>

</html>