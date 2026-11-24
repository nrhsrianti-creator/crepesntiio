<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Menu - Crepes n'Co</title>


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
    padding:15px 7%;
    display:flex;
    align-items:center;
    justify-content:space-between;
    box-shadow:0 2px 8px rgba(0,0,0,.08);

}


.logo img{

    width:75px;
    height:75px;
    object-fit:contain;

}


.menu-nav{

    display:flex;
    gap:30px;
    list-style:none;

}


.menu-nav a{

    text-decoration:none;
    color:#173f63;
    font-weight:bold;

}


.menu-nav a:hover{

    color:#e52f7c;

}


.cart-btn{

    background:#ffcf24;

    padding:13px 25px;

    border-radius:30px;

}



/* JUDUL */

.judul{

    text-align:center;

    padding:50px 20px 30px;

}


.judul h1{

    font-size:38px;

}


.judul p{

    color:#666;

    margin-top:10px;

}



/* MENU */

.menu-container{

    width:86%;

    margin:auto;

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:25px;

    padding-bottom:60px;

}



.produk{

    background:white;

    border-radius:20px;

    overflow:hidden;

    box-shadow:0 5px 15px rgba(0,0,0,.1);

    padding-bottom:20px;

    text-align:center;

    transition:.3s;

}



.produk:hover{

    transform:translateY(-5px);

}



.produk-link{

    text-decoration:none;

    color:inherit;

}



.produk img{

    width:100%;

    height:220px;

    object-fit:cover;

}



.produk h3{

    padding:15px 10px 5px;

}



.harga{

    color:#e52f7c;

    font-weight:bold;

    margin:10px;

}



/* JUMLAH */

.jumlah-box{

    display:flex;

    justify-content:center;

    align-items:center;

    gap:15px;

    margin:15px 0;

}



.jumlah-box button{

    width:35px;

    height:35px;

    border:none;

    border-radius:50%;

    background:#173f63;

    color:white;

    font-size:20px;

    cursor:pointer;

}



.jumlah-box span{

    font-size:18px;

    font-weight:bold;

}





.pesan{

    display:inline-block;

    background:#e52f7c;

    color:white;

    padding:10px 25px;

    border-radius:25px;

    text-decoration:none;

    font-weight:bold;

}



.pesan:hover{

    background:#c91f67;

}



/* FOOTER */


footer{

    background:#173f63;

    color:white;

    text-align:center;

    padding:25px;

}




@media(max-width:768px){


.navbar{

    flex-direction:column;

    gap:15px;

}


.menu-nav{

    flex-wrap:wrap;

    justify-content:center;

}



.menu-container{

    grid-template-columns:1fr;

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



<ul class="menu-nav">


<li><a href="index.php">Beranda</a></li>

<li><a href="menu.php">Menu</a></li>

<li><a href="promo.php">Promo</a></li>

<li><a href="kontak.php">Kontak</a></li>


<li>

<a href="keranjang.php" class="cart-btn">

🛒 Keranjang

</a>

</li>


</ul>


</header>





<section class="judul">


<h1>
Menu Crepes n'Co
</h1>


<p>
Pilih crepes favoritmu dari berbagai pilihan manis dan gurih.
</p>


</section>





<section class="menu-container">



<?php


$menu=[

[
"id"=>"beef-burger",
"gambar"=>"beef burger.png",
"nama"=>"Beef Burger",
"harga"=>"20.000"
],


[
"id"=>"smoked-beef",
"gambar"=>"smoked beef.png",
"nama"=>"Smoked Beef + Sosis",
"harga"=>"18.000"
],


[
"id"=>"chicken-burger",
"gambar"=>"chicken burger.png",
"nama"=>"Chicken Burger",
"harga"=>"18.000"
],


[
"id"=>"nutella-cheese",
"gambar"=>"nutella cheese.png",
"nama"=>"Nutella Cheese",
"harga"=>"20.000"
],


[
"id"=>"silverqueen",
"gambar"=>"silver queen.png",
"nama"=>"SilverQueen",
"harga"=>"18.000"
],


[
"id"=>"cadbury",
"gambar"=>"cadbury.png",
"nama"=>"Cadbury",
"harga"=>"18.000"
],


[
"id"=>"banana-ceres",
"gambar"=>"banana ceres.png",
"nama"=>"Banana Ceres",
"harga"=>"18.000"
],


[
"id"=>"lotus",
"gambar"=>"lotus.png",
"nama"=>"Lotus Cheese",
"harga"=>"20.000"
]


];




foreach($menu as $item){

?>



<div class="produk">



<a href="detail_produk.php?id=<?=$item['id']?>" class="produk-link">


<img src="gambar/<?=$item['gambar']?>">


<h3>

<?=$item['nama']?>

</h3>



<p class="harga">

Rp<?=$item['harga']?>

</p>


</a>





<div class="jumlah-box">


<button onclick="kurang(this)">
-
</button>


<span>
0
</span>


<button onclick="tambah(this)">
+
</button>


</div>




<a 
href="tambah.php?id=<?=$item['id']?>&jumlah=1"
class="pesan">

+ Keranjang

</a>



</div>



<?php

}

?>




</section>





<footer>

<p>
© 2026 Crepes n'Co. All Rights Reserved.
</p>

</footer>




<script>


function tambah(btn){

let angka=btn.parentElement.querySelector("span");

angka.innerHTML=parseInt(angka.innerHTML)+1;


let keranjang=btn.parentElement.nextElementSibling;

let url=new URL(keranjang.href);

url.searchParams.set(
"jumlah",
angka.innerHTML
);

keranjang.href=url;


}



function kurang(btn){

let angka=btn.parentElement.querySelector("span");


if(parseInt(angka.innerHTML)>1){

angka.innerHTML=parseInt(angka.innerHTML)-1;


let keranjang=btn.parentElement.nextElementSibling;


let url=new URL(keranjang.href);


url.searchParams.set(
"jumlah",
angka.innerHTML
);


keranjang.href=url;


}


}



</script>



</body>

</html>