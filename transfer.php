<?php

session_start();


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


<title>Transfer Bank | Crepes n'Co</title>



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

font-size:45px;

margin-bottom:15px;

}





.total{


background:#fff8e5;

padding:20px;

border-radius:20px;

font-size:30px;

font-weight:bold;

color:#e52f7c;

margin-top:15px;

}





.bank-card{


background:#173f63;

color:white;

padding:30px;

border-radius:25px;

margin-top:25px;


}



.bank-card h2{

margin-bottom:20px;

}



.bank-number{


font-size:32px;

font-weight:bold;

letter-spacing:2px;

margin:15px 0;


}



.nama{

font-size:20px;

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





.info{


background:#ffe6ef;

padding:20px;

border-radius:20px;

margin-top:20px;

line-height:1.6;

}



@media(max-width:700px){


.container{

width:90%;

}



.bank-number{

font-size:24px;

}


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

🏦 Transfer Bank <span>Crepes n'Co</span>

</h1>






<div class="box">


<h2>

Detail Pembayaran

</h2>



<br>


<p>

Total yang harus dibayar:

</p>


<div class="total">

Rp <?=number_format($total);?>

</div>



</div>






<div class="box">



<div class="icon">

🏦

</div>



<h2>

Transfer ke Rekening

</h2>




<div class="bank-card">


<h2>

BCA

</h2>


<p>

Nomor Rekening

</p>


<div class="bank-number">

1234567890

</div>



<p class="nama">

a.n Crepes n'Co

</p>



</div>




<div class="info">


<b>Catatan:</b>

<br>

Silakan lakukan transfer sesuai total pembayaran.

Setelah transfer selesai, klik tombol "saya sudah bayar".


</div>






<a 

href="konfirmasi.php?metode=Transfer Bank"

class="btn konfirmasi">

✅ Saya Sudah Transfer

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