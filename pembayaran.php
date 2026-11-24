<?php

session_start();

$total = 0;


if(isset($_SESSION['keranjang'])){

    foreach($_SESSION['keranjang'] as $item){

        $total += $item['harga'] * $item['jumlah'];

    }

}

?>


<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pembayaran | Crepes n'Co</title>


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




/* CONTAINER */

.container{

width:90%;
max-width:900px;
margin:50px auto;

}



h1{

font-size:45px;
margin-bottom:35px;

}



h1 span{

color:#e52f7c;

}




.box{

background:white;
padding:35px;
border-radius:25px;
box-shadow:0 8px 25px rgba(0,0,0,.08);

}




/* PROGRESS */

.progress{

display:flex;
justify-content:space-between;
margin-bottom:30px;

}



.step{

text-align:center;
font-size:13px;

}



.circle{

width:30px;
height:30px;
border-radius:50%;
background:#ddd;
display:flex;
align-items:center;
justify-content:center;
margin:auto;
margin-bottom:8px;

}



.active .circle{

background:#20b968;
color:white;

}




/* TOTAL */

.total{

background:#fff5e3;
padding:20px;
border-radius:15px;
text-align:center;

margin-bottom:20px;

}



.total h2{

color:#e52f7c;
font-size:30px;

}



/* LAYOUT */

.payment-wrapper{

display:grid;
grid-template-columns:1fr 1fr;
gap:15px;

}




.payment-left,
.payment-right{

background:white;
border-radius:20px;
padding:20px;

}




.payment-left{

border:1px solid #eee;

}



.payment-right{

background:#fff5e3;
text-align:center;

}




/* METODE */


.metode label{

display:block;
padding:14px;
margin:12px 0;
border:1px solid #ddd;
border-radius:12px;
cursor:pointer;

}



.metode input{

margin-right:8px;

}




/* QRIS */


.payment-right img{

width:180px;
margin:20px;

}



.payment-right h2{

color:#e52f7c;
margin:10px;

}




/* REKENING */


.rekening{

background:white;
padding:12px;
border-radius:12px;
margin:10px 0;
font-size:14px;

}



.copy-btn{

background:#173f63;
color:white;
border:none;
padding:7px 15px;
border-radius:20px;
cursor:pointer;
margin-top:8px;

}



.copy-btn:hover{

background:#e52f7c;

}
/* BUTTON */

.btn-bayar{

width:100%;
background:#20b968;
color:white;
border:none;
padding:15px;
border-radius:30px;
font-weight:bold;
margin-top:25px;
cursor:pointer;

}



.button-group{

display:flex;
gap:15px;
margin-top:20px;

}



.btn{

flex:1;
padding:14px;
border-radius:30px;
text-align:center;
text-decoration:none;
font-weight:bold;

}



.checkout{

background:#ffcf24;
color:#173f63;

}



.keranjang{

background:#173f63;
color:white;

}



@media(max-width:700px){


.payment-wrapper{

grid-template-columns:1fr;

}



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



h1{

font-size:32px;

}


.button-group{

flex-direction:column;

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
<a href="index.php">Beranda</a>
</li>


<li>
<a href="menu.php">Menu</a>
</li>


<li>
<a href="promo.php">Promo</a>
</li>


<li>
<a href="kontak.php">Kontak</a>
</li>


<li>

<a href="keranjang.php" class="cart-btn">

🛒 Keranjang

</a>

</li>


</ul>


</header>







<div class="container">


<h1>

Pembayaran <span>Crepes n'Co</span>

</h1>




<div class="box">





<div class="progress">


<div class="step">

<div class="circle">
1
</div>

Keranjang

</div>



<div class="step">

<div class="circle">
2
</div>

Checkout

</div>



<div class="step active">

<div class="circle">
3
</div>

Pembayaran

</div>



<div class="step">

<div class="circle">
4
</div>

Selesai

</div>



</div>







<form action="konfirmasi.php" method="POST">





<div class="payment-wrapper">





<!-- BAGIAN KIRI -->

<div class="payment-left">



<div class="total">


<p>

Total Pembayaran

</p>


<h2>

Rp <?=number_format($total,0,",",".");?>

</h2>


</div>





<h3>

Pilih Metode Pembayaran

</h3>




<div class="metode">



<label>

<input type="radio"

name="metode"

value="QRIS"

checked

onclick="ubah('qris')">


📱 QRIS


</label>





<label>

<input type="radio"

name="metode"

value="E-Wallet"

onclick="ubah('ewallet')">


💳 E-Wallet


</label>





<label>

<input type="radio"

name="metode"

value="Transfer Bank"

onclick="ubah('transfer')">


🏦 Transfer Bank


</label>



</div>



</div>






<!-- BAGIAN KANAN -->

<div id="isi">


<div class="payment-right">



<h3>

📱 Pembayaran QRIS

</h3>



<img src="gambar/qris.png">



<h2>

Rp <?=number_format($total,0,",",".");?>

</h2>



<p>

Scan QR untuk pembayaran

</p>



</div>


</div>




</div>






<input type="hidden" name="total" value="<?=$total?>">





<button class="btn-bayar">

✓ Saya Sudah Bayar

</button>





</form>






<div class="button-group">


<a href="checkout.php" class="btn checkout">

← Checkout

</a>




<a href="keranjang.php" class="btn keranjang">

🛒 Keranjang

</a>


</div>




</div>


</div>

<script>


function ubah(pilihan){


let isi = document.getElementById("isi");





// QRIS

if(pilihan=="qris"){


isi.innerHTML = `


<div class="payment-right">


<h3>
📱 Pembayaran QRIS
</h3>



<img src="gambar/qris.png">



<h2>

Rp <?=number_format($total,0,",",".");?>

</h2>



<p>

Scan QR untuk pembayaran

</p>



</div>


`;



}





// E WALLET

if(pilihan=="ewallet"){


isi.innerHTML = `


<div class="payment-right">


<h3>
💳 E-Wallet
</h3>



<div class="rekening">


<b>

DANA

</b>


<br>


082189799599


<br>


<button class="copy-btn"

onclick="copyText('082189799599')">

📋 Salin

</button>


</div>





<div class="rekening">


<b>

OVO

</b>


<br>


082189799599


<br>


<button class="copy-btn"

onclick="copyText('082189799599')">

📋 Salin

</button>


</div>






<div class="rekening">


<b>

GoPay

</b>


<br>


082189799599


<br>


<button class="copy-btn"

onclick="copyText('082189799599')">

📋 Salin

</button>


</div>







<div class="rekening">


<b>

ShopeePay

</b>


<br>


082189799599


<br>


<button class="copy-btn"

onclick="copyText('082189799599')">

📋 Salin

</button>


</div>





<p>

a.n

<b>

Nur Hasriyanti

</b>

</p>



</div>


`;



}





// TRANSFER BANK

if(pilihan=="transfer"){


isi.innerHTML = `


<div class="payment-right">


<h3>

🏦 Transfer Bank

</h3>





<div class="rekening">


<b>

BCA

</b>


<br>


1234567890


<br>


<button class="copy-btn"

onclick="copyText('1234567890')">

📋 Salin

</button>


</div>






<div class="rekening">


<b>

BTN

</b>


<br>


9876543210


<br>


<button class="copy-btn"

onclick="copyText('9876543210')">

📋 Salin

</button>


</div>






<div class="rekening">


<b>

BRI

</b>


<br>


1122334455


<br>


<button class="copy-btn"

onclick="copyText('1122334455')">

📋 Salin

</button>


</div>







<div class="rekening">


<b>

Sulselbar

</b>


<br>


5566778899


<br>


<button class="copy-btn"

onclick="copyText('5566778899')">

📋 Salin

</button>


</div>






<br>


<p>

a.n

<br>

<b>

Nur Hasriyanti

</b>


</p>



</div>



`;



}



}




// COPY NOMOR

function copyText(text){


navigator.clipboard.writeText(text);


alert("Nomor berhasil disalin: " + text);


}


</script>


</body>

</html>