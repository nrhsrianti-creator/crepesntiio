<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Promo | Crepes n'Co</title>


<style>


*{

margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;

}



:root{

--biru:#173f63;
--pink:#e52f7c;
--kuning:#ffcf24;
--cream:#fff8e5;

}



body{

background:#fffdf7;

color:var(--biru);

}



/* NAVBAR */


.navbar{

background:white;

padding:12px 7%;

display:flex;

align-items:center;

justify-content:space-between;

box-shadow:0 5px 20px rgba(0,0,0,.08);

}



.logo img{

width:90px;

height:90px;

object-fit:contain;

}



.menu-nav{

display:flex;

gap:35px;

list-style:none;

align-items:center;

}



.menu-nav a{

text-decoration:none;

color:var(--biru);

font-weight:bold;

font-size:17px;

}



.menu-nav a:hover{

color:var(--pink);

}



.cart{

background:var(--kuning);

padding:13px 25px;

border-radius:30px;

}







/* HERO */


.hero{


background:var(--cream);

padding:70px 20px;

text-align:center;


}



.hero h1{

font-size:50px;

margin-bottom:15px;

}



.hero h1 span{

color:var(--pink);

}



.hero p{

font-size:18px;

color:#666;

}





/* PROMO */


.promo-container{


width:86%;

margin:50px auto;

display:grid;

grid-template-columns:repeat(3,1fr);

gap:30px;


}



.promo-card{


background:white;

border-radius:25px;

overflow:hidden;

box-shadow:0 10px 25px rgba(0,0,0,.1);

text-align:center;

padding-bottom:30px;

}



.promo-card img{


width:100%;

height:230px;

object-fit:cover;


}



.promo-card h2{


color:var(--pink);

margin:20px 10px 10px;

}



.promo-card p{


color:#666;

line-height:1.6;

padding:0 20px;


}




.badge{


display:inline-block;

background:var(--kuning);

padding:8px 20px;

border-radius:30px;

font-weight:bold;

margin-top:20px;


}




.btn{


display:inline-block;

margin-top:20px;

background:var(--biru);

color:white;

padding:12px 30px;

border-radius:30px;

text-decoration:none;

font-weight:bold;


}




.btn:hover{

background:var(--pink);

}





footer{


background:var(--biru);

color:white;

text-align:center;

padding:30px;


}




@media(max-width:900px){


.promo-container{

grid-template-columns:1fr;

}



.navbar{

flex-direction:column;

gap:15px;

}



.menu-nav{

flex-wrap:wrap;

justify-content:center;

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
<a href="keranjang.php" class="cart">

🛒 Keranjang

</a>
</li>


</ul>


</header>








<section class="hero">


<h1>

Promo <span>Crepes n'Co</span>

</h1>


<p>

Nikmati berbagai promo menarik dan hemat setiap hari.

</p>


</section>








<section class="promo-container">





<div class="promo-card">


<img src="gambar/promo1.png">


<div class="badge">

PROMO HARI INI

</div>


<h2>

Buy 2 Get 1

</h2>


<p>

Nikmati crepes favoritmu.

Beli 2 menu pilihan dan dapatkan 1 crepes tambahan.

</p>


<a href="promo_tambah.php?id=buy2get1" class="btn">

+ Keranjang

</a>


</div>








<div class="promo-card">


<img src="gambar/promo2.png">


<div class="badge">

HEMAT

</div>


<h2>

Diskon 20%

</h2>


<p>

Dapatkan potongan harga spesial untuk menu pilihan Crepes n'Co.

</p>


<a href="promo_tambah.php?id=diskon" class="btn">

+ Keranjang

</a>


</div>








<div class="promo-card">


<img src="gambar/promo3.png">


<div class="badge">

SPECIAL

</div>


<h2>

Combo Favorit

</h2>


<p>

Nikmati paket combo crepes manis dan gurih dengan harga terbaik.

</p>


<a href="promo_tambah.php?id=combo" class="btn">

+ Keranjang

</a>


</div>





</section>







<footer>

© 2026 Crepes n'Co. All Rights Reserved.

</footer>




</body>

</html>