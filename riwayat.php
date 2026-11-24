<?php

session_start();
require_once 'koneksi.php';


$query = $conn->query(
    "SELECT * FROM pelacakan_pesanan 
     ORDER BY id DESC"
);


$riwayat=[];


while($row=$query->fetch_assoc()){

    $riwayat[]=$row;

}


?>


<!DOCTYPE html>

<html lang="id">


<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Riwayat Pesanan | Crepes n'Co</title>



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




/* NAVBAR */


.navbar{


background:white;

height:110px;

padding:0 7%;

display:flex;

align-items:center;

justify-content:space-between;

box-shadow:0 5px 15px rgba(0,0,0,.08);


}



.logo img{


width:85px;


}



.menu{


display:flex;

gap:30px;

list-style:none;

align-items:center;


}



.menu a{


text-decoration:none;

color:#173f63;

font-weight:bold;


}



.cart-btn{


background:#ffcf24;

padding:13px 25px;

border-radius:30px;


}



/* CONTENT */


.container{


width:90%;

max-width:850px;

margin:50px auto;


}



.title{


text-align:center;

font-size:50px;

font-weight:800;

margin-bottom:40px;


}



.title span{


color:#e52f7c;


}





.card{


background:white;

width:100%;

padding:40px;

border-radius:25px;

margin-bottom:30px;

box-shadow:0 8px 25px rgba(0,0,0,.08);


}



.card h2{


color:#e52f7c;

font-size:28px;

margin-bottom:25px;


}




.data{


font-size:17px;

line-height:2;


}




.produk{


background:#fff8e5;

padding:25px;

border-radius:20px;

margin-top:25px;


}



.produk h3{


margin-bottom:10px;

font-size:21px;


}




.total{


font-size:30px;

font-weight:bold;

color:#e52f7c;

margin-top:25px;


}




.status{


display:inline-block;

background:#20b968;

color:white;

padding:12px 25px;

border-radius:30px;

margin-top:20px;

font-weight:bold;


}




.btn{


display:inline-block;

margin-top:25px;

background:#173f63;

color:white;

padding:15px 35px;

border-radius:30px;

text-decoration:none;

font-weight:bold;


}



.btn:hover{


background:#0f2d48;


}




.kosong{


background:white;

padding:60px;

text-align:center;

border-radius:25px;

font-size:25px;

box-shadow:0 8px 25px rgba(0,0,0,.08);


}





/* MOBILE */


@media(max-width:700px){


.navbar{


height:auto;

padding:20px;

flex-direction:column;

gap:20px;


}



.menu{


flex-wrap:wrap;

justify-content:center;


}



.title{


font-size:35px;


}



.card{


padding:25px;


}



.total{


font-size:25px;


}



}




</style>


</head>




<body>




<header class="navbar">


<div class="logo">

<a href="index.php">

<img src="gambar/logo2.png">

</a>

</div>




<ul class="menu">


<li>

<a href="index.php">
Beranda
</a>

</li>



<li>

<a href="menu.php">
Menu
</a>

</li>



<li>

<a href="promo.php">
Promo
</a>

</li>



<li>

<a href="kontak.php">
Kontak
</a>

</li>




<li>

<a href="keranjang.php" class="cart-btn">

🛒 Keranjang

</a>

</li>


</ul>


</header>







<div class="container">



<h1 class="title">

📋 Riwayat <span>Pesanan</span>

</h1>




<?php if(empty($riwayat)): ?>


<div class="kosong">


Belum ada riwayat pesanan 😢


<br><br>


<a href="menu.php" class="btn">

Mulai Pesan

</a>


</div>



<?php else: ?>





<?php foreach($riwayat as $pesanan): ?>



<div class="card">



<h2>

Pesanan Crepes n'Co

</h2>




<div class="data">


<b>Kode Pesanan :</b>

<?=htmlspecialchars($pesanan['kode_pesanan']);?>


<br>


<b>Nama Pemesan :</b>

<?=htmlspecialchars($pesanan['nama_pemesan']);?>


<br>


<b>No WhatsApp :</b>

<?=htmlspecialchars($pesanan['no_whatsapp']);?>


<br>


<b>Alamat :</b>

<?=htmlspecialchars($pesanan['alamat']);?>


<br>


<b>Metode Pembayaran :</b>

<?=htmlspecialchars($pesanan['metode_pembayaran']);?>


</div>






<div class="produk">


<h3>

Detail Produk

</h3>



<p>

🥞 

<?=nl2br(htmlspecialchars($pesanan['detail_pesanan']));?>

</p>


</div>






<div class="total">


Total :

Rp <?=number_format($pesanan['total'],0,',','.');?>


</div>






<div class="status">


<?=htmlspecialchars($pesanan['status']);?>


</div>





<br>




<a 

class="btn"

href="status_pesanan.php?kode=<?=$pesanan['kode_pesanan'];?>">


📦 Lihat Progres Pesanan


</a>





</div>




<?php endforeach; ?>



<?php endif; ?>



</div>






</body>


</html>