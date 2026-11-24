<?php

session_start();

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Crepes n'Co</title>


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
    --hijau:#20b968;

}


body{

    background:#fffdf7;
    color:var(--biru);

}


html{

    scroll-behavior:smooth;

}



/* ================= NAVBAR ================= */


.navbar{

    width:100%;
    height:90px;
    background:white;

    display:flex;
    align-items:center;
    justify-content:space-between;

    padding:0 7%;

    box-shadow:0 3px 15px rgba(0,0,0,.08);

}



.logo img{

    width:90px;
    height:90px;
    object-fit:contain;

}



.menu{

    display:flex;
    align-items:center;
    gap:35px;

}



.menu a{

    text-decoration:none;
    color:var(--biru);
    font-weight:bold;
    font-size:17px;

}



.menu a:hover{

    color:var(--pink);

}



.btn-cart{

    background:var(--kuning);
    padding:13px 28px;
    border-radius:30px;

}



/* ================= HERO ================= */


.hero{

    background:var(--cream);

    min-height:520px;

    display:flex;

    align-items:center;

    justify-content:space-between;

    padding:50px 7%;

}



.hero-left{

    width:50%;

}



.badge{

    display:inline-block;

    background:#ffe99a;

    padding:8px 18px;

    border-radius:25px;

    font-weight:bold;

    color:#0754a3;

    margin-bottom:15px;

}



.hero-left h1{

    font-size:60px;

    line-height:1.1;

    margin-bottom:20px;

}



.hero-left h1 span{

    color:var(--pink);

}



.hero-left p{

    color:#555;

    font-size:18px;

    line-height:1.7;

    margin-bottom:30px;

}



.btn-primary{

    display:inline-block;

    background:var(--kuning);

    padding:16px 35px;

    border-radius:30px;

    text-decoration:none;

    font-weight:bold;

    color:var(--biru);

}



.btn-primary:hover{

    background:var(--pink);

    color:white;

}




.hero-right{

    width:45%;

    text-align:center;

}



.hero-right img{

    width:100%;

    max-width:520px;

    height:380px;

    object-fit:contain;

}



/* ================= SECTION ================= */


.section{

    padding:55px 7%;

    text-align:center;

}



.tag{

    display:inline-block;

    background:#ffe99a;

    padding:8px 20px;

    border-radius:25px;

    font-weight:bold;

    color:#0754a3;

}



.section h2{

    font-size:38px;

    margin:18px 0;

}



.section p{

    color:#666;

    font-size:17px;

}

/* ================= KEUNGGULAN ================= */


.feature-container{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:25px;

    margin-top:35px;

}



.feature-card{

    background:#fff8e5;

    padding:30px 25px;

    border-radius:25px;

    border:1px solid #ffe7a0;

}



.feature-icon{

    width:70px;

    height:70px;

    margin:auto;

    display:flex;

    align-items:center;

    justify-content:center;

    background:#ffe99a;

    border-radius:50%;

    font-size:35px;

}



.feature-card h3{

    margin:18px 0 10px;

    color:var(--pink);

    font-size:22px;

}



.feature-card p{

    color:#555;

    line-height:1.6;

}





/* ================= PRODUK ================= */


.product-section{

    background:#fff8e5;

    padding:55px 7%;

    text-align:center;

}



.product-container{

    display:grid;

    grid-template-columns:repeat(4,1fr);

    gap:22px;

    margin-top:35px;

}



.product-card{

    background:white;

    border-radius:25px;

    overflow:hidden;

    box-shadow:0 8px 20px rgba(0,0,0,.08);

}



.product-card img{

    width:100%;

    height:220px;

    object-fit:cover;

}



.product-info{

    padding:20px;

}



.product-info h3{

    font-size:20px;

    margin:12px 0;

}



.rating{

    color:#f5b400;

    font-size:14px;

}



.price{

    color:var(--pink);

    font-size:22px;

    font-weight:bold;

    margin-bottom:15px;

}



.detail-btn{

    display:inline-block;

    background:var(--pink);

    color:white;

    padding:10px 25px;

    border-radius:25px;

    text-decoration:none;

    font-weight:bold;

    font-size:14px;

}



.detail-btn:hover{

    background:#c91f67;

}



/* ================= TRUST ================= */


.trust{

    padding:55px 7%;

    background:white;

    text-align:center;

}



.trust-container{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:25px;

    margin-top:35px;

}



.trust-card{

    background:#fff8e5;

    padding:30px 20px;

    border-radius:25px;

}



.trust-card .icon{

    font-size:40px;

}



.trust-card h3{

    color:var(--pink);

    margin:15px 0;

}



.trust-card p{

    color:#555;

    line-height:1.6;

}




/* ================= FOOTER ================= */


.footer{

    background:var(--biru);

    color:white;

    text-align:center;

    padding:30px;

}




@media(max-width:900px){


.feature-container,
.trust-container{

    grid-template-columns:1fr;

}



.product-container{

    grid-template-columns:repeat(2,1fr);

}


}



@media(max-width:600px){


.menu{

    display:none;

}


.hero{

    flex-direction:column;

    text-align:center;

}


.hero-left,
.hero-right{

    width:100%;

}



.hero-left h1{

    font-size:40px;

}



.product-container{

    grid-template-columns:1fr;

}



}

</style>

</head>


<body>


<!-- NAVBAR -->


<header class="navbar">


<div class="logo">

<img src="gambar/logo2.png">

</div>


<nav class="menu">


<a href="index.php">
Beranda
</a>


<a href="menu.php">
Menu
</a>


<a href="promo.php">
Promo
</a>


<a href="kontak.php">
Kontak
</a>


<a href="riwayat.php">
Pesanan
</a>


<a href="keranjang.php" class="btn-cart">

🛒 Keranjang

</a>


</nav>


</header>





<!-- HERO -->


<section class="hero">


<div class="hero-left">


<span class="badge">

🥞 Selamat Datang di Crepes n'Co

</span>


<h1>

Crepes Lezat,

<br>

<span>

Fresh Setiap Hari!

</span>


</h1>


<p>

Nikmati berbagai pilihan crepes manis dan gurih
dari Crepes n'Co. Pilih menu favoritmu dan pesan
dengan mudah secara online.

</p>


<a href="menu.php" class="btn-primary">

Lihat Menu →

</a>


</div>




<div class="hero-right">


<img src="gambar/crepes2.png">


</div>


</section>
<!-- ================= KEUNGGULAN ================= -->


<section class="section">


<span class="tag">

KEUNGGULAN KAMI

</span>


<h2>

Kenapa Crepes n'Co?

</h2>


<p>

Nikmati crepes dengan berbagai pilihan rasa
yang bisa kamu pesan dengan mudah.

</p>




<div class="feature-container">



<div class="feature-card">


<div class="feature-icon">

🥞

</div>


<h3>

Banyak Pilihan

</h3>


<p>

Tersedia berbagai pilihan crepes manis
dan gurih sesuai selera.

</p>


</div>






<div class="feature-card">


<div class="feature-icon">

🍓

</div>


<h3>

Fresh Setiap Hari

</h3>


<p>

Crepes dibuat menggunakan bahan
berkualitas dan rasa terbaik.

</p>


</div>






<div class="feature-card">


<div class="feature-icon">

📱

</div>


<h3>

Mudah Dipesan

</h3>


<p>

Pesan menu favoritmu secara online
dengan mudah dan cepat.

</p>


</div>




</div>


</section>









<!-- ================= MENU FAVORIT ================= -->


<section class="product-section">


<span class="tag">

MENU FAVORIT

</span>


<h2>

Temukan Rasa Favoritmu!

</h2>


<p>

Beberapa pilihan menu Crepes n'Co yang bisa kamu nikmati.

</p>





<div class="product-container">





<div class="product-card">


<img src="gambar/beef burger.png">


<div class="product-info">


<div class="rating">

⭐ 4.8 | 120 Ulasan

</div>


<h3>

Beef Burger

</h3>


<div class="price">

Rp20.000

</div>


<a href="detail_produk.php?id=beef-burger" class="detail-btn">

Lihat Detail

</a>


</div>


</div>







<div class="product-card">


<img src="gambar/nutella cheese.png">


<div class="product-info">


<div class="rating">

⭐ 4.9 | 150 Ulasan

</div>


<h3>

Nutella Cheese

</h3>


<div class="price">

Rp20.000

</div>


<a href="detail_produk.php?id=nutella-cheese" class="detail-btn">

Lihat Detail

</a>


</div>


</div>







<div class="product-card">


<img src="gambar/lotus.png">


<div class="product-info">


<div class="rating">

⭐ 4.8 | 90 Ulasan

</div>


<h3>

Lotus Cheese

</h3>


<div class="price">

Rp20.000

</div>


<a href="detail_produk.php?id=lotus" class="detail-btn">

Lihat Detail

</a>


</div>


</div>







<div class="product-card">


<img src="gambar/chicken burger.png">


<div class="product-info">


<div class="rating">

⭐ 4.8 | 120 Ulasan

</div>


<h3>

Chicken Burger

</h3>


<div class="price">

Rp18.000

</div>


<a href="detail_produk.php?id=chicken-burger" class="detail-btn">

Lihat Detail

</a>


</div>


</div>






</div>



<br><br>



<a href="menu.php" class="btn-primary">

Lihat Semua Menu →

</a>



</section>










<!-- ================= TRUST SUPPORT ================= -->


<section class="trust">


<span class="tag">

KEAMANAN & LAYANAN

</span>


<h2>

Belanja Nyaman di Crepes n'Co

</h2>


<p>

Kami memberikan pelayanan terbaik
untuk setiap pesanan pelanggan.

</p>





<div class="trust-container">





<div class="trust-card">


<div class="icon">

🚚

</div>


<h3>

Pengiriman Cepat

</h3>


<p>

Pesanan diproses dengan cepat
dan aman sampai tujuan.

</p>


</div>







<div class="trust-card">


<div class="icon">

💳

</div>


<h3>

Pembayaran Aman

</h3>


<p>

Tersedia QRIS, E-wallet, dan transfer bank.

</p>


</div>







<div class="trust-card">


<div class="icon">

💬

</div>


<h3>

Customer Support

</h3>


<p>

Kami siap membantu kebutuhan
pesanan pelanggan.

</p>


</div>




</div>


</section>










<!-- ================= FOOTER ================= -->


<footer class="footer">


<h3>

Crepes n'Co

</h3>


<p>

Crepes lezat, fresh setiap hari.

</p>


<br>


<p>

© 2026 Crepes n'Co. All Rights Reserved.

</p>



</footer>



</body>

</html>