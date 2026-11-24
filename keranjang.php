<?php

session_start();


if(!isset($_SESSION['keranjang'])){

    $_SESSION['keranjang']=[];

}



// TAMBAH JUMLAH

if(isset($_GET['tambah'])){

    $id=$_GET['tambah'];

    if(isset($_SESSION['keranjang'][$id])){

        $_SESSION['keranjang'][$id]['jumlah']++;

    }

}



// KURANG JUMLAH

if(isset($_GET['kurang'])){

    $id=$_GET['kurang'];

    if(isset($_SESSION['keranjang'][$id])){


        if($_SESSION['keranjang'][$id]['jumlah'] > 1){

            $_SESSION['keranjang'][$id]['jumlah']--;

        }

    }

}




// HAPUS

if(isset($_GET['hapus'])){

    $id=$_GET['hapus'];

    unset($_SESSION['keranjang'][$id]);

}




$total=0;

$pesanan="";


foreach($_SESSION['keranjang'] as $item){


    $total += $item['harga']*$item['jumlah'];


    $pesanan .= $item['nama']." x ".$item['jumlah']."%0A";


}



?>



<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Keranjang | Crepes n'Co</title>


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

width:90px;

}



.menu{

display:flex;

align-items:center;

gap:35px;

list-style:none;

}



.menu a{

text-decoration:none;

font-weight:bold;

color:#173f63;

}



.cart-btn{

background:#ffcf24;

padding:13px 25px;

border-radius:30px;

}






/* CONTAINER */


.container{

width:90%;

max-width:1200px;

margin:auto;

padding:50px 0;

}





.title{

font-size:45px;

font-weight:800;

margin-bottom:40px;

}



.title span{

color:#e52f7c;

}






/* KERANJANG KOSONG */


.kosong{

background:white;

padding:70px 40px;

border-radius:30px;

text-align:center;

box-shadow:0 10px 30px rgba(0,0,0,.08);

border:2px dashed #ffcf24;

font-size:25px;

}



.kosong .icon{

font-size:70px;

margin-bottom:20px;

}



.kosong h2{

color:#e52f7c;

margin-bottom:15px;

}



.kosong p{

color:#666;

font-size:17px;

line-height:1.6;

}



.btn-menu{

display:inline-block;

margin-top:25px;

background:#e52f7c;

color:white;

padding:15px 35px;

border-radius:30px;

text-decoration:none;

font-weight:bold;

}






/* PRODUK */


.cart-box{

background:white;

border-radius:25px;

padding:30px;

display:grid;

grid-template-columns:150px 1fr 180px;

align-items:center;

gap:30px;

margin-bottom:25px;

box-shadow:0 8px 25px rgba(0,0,0,.08);

}





.cart-box img{

width:130px;

height:120px;

object-fit:contain;

}



.nama{

font-size:24px;

font-weight:bold;

}



.harga{

margin-top:10px;

font-size:20px;

font-weight:bold;

color:#e52f7c;

}



.qty{

display:flex;

align-items:center;

gap:15px;

margin-top:20px;

}



.qty a{

width:40px;

height:40px;

background:#e52f7c;

color:white;

border-radius:50%;

display:flex;

align-items:center;

justify-content:center;

font-size:22px;

text-decoration:none;

}



.jumlah{

font-size:20px;

font-weight:bold;

}



.hapus{

display:inline-block;

margin-top:15px;

background:#173f63;

color:white;

padding:10px 20px;

border-radius:25px;

text-decoration:none;

}




.subtotal{

text-align:right;

font-size:18px;

font-weight:bold;

}



.subtotal span{

display:block;

margin-top:10px;

font-size:23px;

color:#e52f7c;

}

/* TOTAL BOX */


.total-box{

background:white;

border-radius:30px;

padding:40px;

margin-top:35px;

box-shadow:0 10px 30px rgba(0,0,0,.08);

}



.total{

font-size:38px;

font-weight:800;

margin-bottom:30px;

color:#173f63;

}



.total::first-letter{

color:#e52f7c;

}





.button-group{

display:flex;

gap:20px;

flex-wrap:wrap;

}



.button-group a{

display:inline-flex;

align-items:center;

justify-content:center;

padding:16px 35px;

border-radius:30px;

text-decoration:none;

font-weight:bold;

font-size:17px;

transition:.3s;

}



/* tombol kembali */


.kembali{

background:#173f63;

color:white;

}



.kembali:hover{

background:#0d2e4d;

}



/* tombol beranda */


.beranda{

background:#ffcf24;

color:#173f63;

}



.beranda:hover{

background:#ffd94d;

}



/* checkout */


.checkout{

background:#20b968;

color:white;

}



.checkout:hover{

background:#159653;

}




/* FOOTER */


footer{

margin-top:50px;

background:#173f63;

color:white;

text-align:center;

padding:30px;

}




/* RESPONSIVE */


@media(max-width:850px){


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



.cart-box{

grid-template-columns:1fr;

text-align:center;

}



.cart-box img{

margin:auto;

}



.qty{

justify-content:center;

}



.subtotal{

text-align:center;

}



.title{

font-size:32px;

}



.total{

font-size:30px;

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

🛒 Keranjang <span>Crepes n'Co</span>

</h1>





<?php if(empty($_SESSION['keranjang'])){ ?>


<div class="kosong">


<div class="icon">

🛒

</div>


<h2>

Keranjang Kamu Masih Kosong

</h2>


<p>

Belum ada crepes yang dipilih.<br>

Yuk pilih menu favoritmu dan nikmati Crepes n'Co!

</p>



<a href="menu.php" class="btn-menu">

🍽 Pilih Menu Sekarang

</a>


</div>



<?php } ?>








<?php foreach($_SESSION['keranjang'] as $id=>$item){ ?>


<div class="cart-box">



<img src="<?= $item['gambar']; ?>">



<div>


<div class="nama">

<?= $item['nama']; ?>

</div>


<div class="harga">

Rp <?=number_format($item['harga']);?>

</div>



<div class="qty">


<a href="?kurang=<?=$id?>">

-

</a>


<span class="jumlah">

<?=$item['jumlah'];?>

</span>



<a href="?tambah=<?=$id?>">

+

</a>


</div>




<a href="?hapus=<?=$id?>" class="hapus">

Hapus

</a>



</div>






<div class="subtotal">


Subtotal


<span>

Rp <?=number_format($item['harga']*$item['jumlah']);?>

</span>


</div>



</div>



<?php } ?>






<div class="total-box">


<div class="total">

Total : Rp <?=number_format($total);?>

</div>



<div class="button-group">



<a href="menu.php" class="kembali">

← Kembali ke Menu

</a>



<a href="index.php" class="beranda">

🏠 Beranda

</a>




<a href="checkout.php" class="checkout">

Checkout

</a>



</div>


</div>



</div>






<footer>

© 2026 Crepes n'Co. All Rights Reserved.

</footer>



</body>

</html>