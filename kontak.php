<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kontak | Crepes n'Co</title>


<style>


*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}



:root{

--biru:#0754a3;
--biru-tua:#173f63;
--pink:#e52f7c;
--kuning:#ffcf24;
--cream:#fff8e5;

}



body{

background:#fffdf7;

color:var(--biru-tua);

}





/* NAVBAR */


.navbar{

background:white;

padding:12px 7%;

display:flex;

justify-content:space-between;

align-items:center;

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

align-items:center;

list-style:none;

}



.menu-nav a{

text-decoration:none;

color:var(--biru-tua);

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


.contact-hero{


background:var(--cream);

text-align:center;

padding:60px 20px 90px;


}



.contact-hero h1{


font-size:50px;

margin-bottom:20px;


}



.contact-hero h1 span{

color:var(--pink);

}



.contact-hero p{

font-size:18px;

color:#666;

line-height:1.7;

max-width:700px;

margin:auto;

}






/* CARD */


.contact-wrapper{

padding:0 7% 80px;

margin-top:-40px;

}



.contact-grid{


max-width:1200px;

margin:auto;

display:grid;

grid-template-columns:repeat(3,1fr);

gap:30px;


}




.card{


background:white;

padding:35px 25px;

border-radius:25px;

text-align:center;

min-height:360px;

display:flex;

flex-direction:column;

align-items:center;

justify-content:flex-start;

box-shadow:0 10px 30px rgba(0,0,0,.08);

transition:.3s;

}



.card:hover{

transform:translateY(-8px);

}




.logo-app{


width:80px;

height:80px;

object-fit:contain;

margin-bottom:20px;


}





.card h3{

color:var(--pink);

font-size:22px;

margin-bottom:15px;

}



.card p{


color:#666;

font-size:15px;

line-height:1.7;

height:70px;


}



.card a{


margin-top:auto;

background:var(--biru);

color:white;

padding:12px 25px;

border-radius:30px;

text-decoration:none;

font-weight:bold;


}



.card a:hover{

background:var(--pink);

}





/* FOOTER */


footer{


background:var(--biru-tua);

color:white;

text-align:center;

padding:30px;


}






@media(max-width:900px){


.contact-grid{

grid-template-columns:repeat(2,1fr);

}


}



@media(max-width:600px){


.navbar{

flex-direction:column;

gap:15px;

}



.menu-nav{

flex-wrap:wrap;

justify-content:center;

}



.contact-grid{

grid-template-columns:1fr;

}


.contact-hero h1{

font-size:35px;

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







<section class="contact-hero">


<h1>

Kontak <span>Crepes n'Co</span>

</h1>



<p>

Pesan crepes favoritmu melalui platform resmi Crepes n'Co.

Nikmati berbagai pilihan rasa terbaik kapan saja.

</p>


</section>








<section class="contact-wrapper">


<div class="contact-grid">






<div class="card">


<img src="gambar/maps.png" class="logo-app">


<h3>

Lokasi

</h3>


<p>

Crepes n'Co BTP<br>

Blok I<br>

Makassar

</p>


<a href="https://maps.app.goo.gl/XvueviW6TjBkLhre6">

Lihat Maps

</a>


</div>







<div class="card">


<img src="gambar/instagram.png" class="logo-app">


<h3>

Instagram

</h3>


<p>

Update menu dan promo terbaru Crepes n'Co.

</p>


<a href="https://www.instagram.com/crepesnco.id/">

@crepesnco.id

</a>


</div>







<div class="card">


<img src="gambar/whatsapp.png" class="logo-app">


<h3>

WhatsApp

</h3>


<p>

Hubungi Crepes n'Co untuk pemesanan.

</p>


<a href="https://wa.me/qr/MAN55RLRJJWLC1?s=v">

Chat Sekarang

</a>


</div>







<div class="card">


<img src="gambar/gofood.png" class="logo-app">


<h3>

GoFood

</h3>


<p>

Pesan Crepes n'Co melalui GoFood.

</p>


<a href="https://gofood.link/a/JMiNrp3">

Pesan Sekarang

</a>


</div>







<div class="card">


<img src="gambar/shopeefood.png" class="logo-app">


<h3>

ShopeeFood

</h3>


<p>

Nikmati Crepes n'Co melalui ShopeeFood.

</p>


<a href="https://shopee.co.id/universal-link/now-food/shop/21401835?deep_and_deferred=1&shareChannel=copy_link">

Pesan Sekarang

</a>


</div>







<div class="card">


<img src="gambar/grabfood.png" class="logo-app">


<h3>

GrabFood

</h3>


<p>

Pesan Crepes n'Co melalui GrabFood.

</p>


<a href="https://app.grab.com/s/KFhatIdd">

Pesan Sekarang

</a>


</div>






</div>


</section>





<footer>

© 2026 Crepes n'Co. All Rights Reserved.

</footer>



</body>

</html>