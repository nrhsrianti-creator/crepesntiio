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


<title>Pembayaran COD (Bayar di Tempat) | Crepes n'Co</title>



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





.info{


background:#ffe6ef;

padding:25px;

border-radius:20px;

line-height:1.7;

margin-top:25px;

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



@media(max-width:700px){


.btn{

display:block;

text-align:center;

margin-left:0;

}


}



</style>


</head>



<body>



<div class="container">



<h1>

💵 Pembayaran <span>COD</span>

</h1>





<div class="box">


<div class="icon">

💵

</div>



<h2>

Pembayaran Tunai

</h2>


<p>

Silakan lakukan pembayaran langsung di outlet Crepes n'Co atau saat ketemu dengan kurir.

</p>





<div class="total-box">


<div class="total-title">

Siapkan uang sebesar:

</div>



<div class="total">

Rp <?=number_format($total);?>

</div>



</div>






<div class="info">


<b>Informasi Pembayaran:</b>

<br>

✓ Siapkan uang tunai sesuai total pembayaran.

<br>

✓ Pesanan akan diproses setelah pembayaran dilakukan.


</div>






<a 

href="konfirmasi.php?metode=COD"

class="btn konfirmasi">

✅ Konfirmasi Pesanan

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