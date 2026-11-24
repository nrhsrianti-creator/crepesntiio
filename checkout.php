<?php

session_start();


if(empty($_SESSION['keranjang'])){

    header("location:menu.php");
    exit;

}



$total = 0;


foreach($_SESSION['keranjang'] as $item){

    $total += $item['harga'] * $item['jumlah'];

}




if(isset($_POST['lanjut'])){


    $_SESSION['nama_pemesan'] = $_POST['nama'];

    $_SESSION['no_wa'] = $_POST['wa'];

    $_SESSION['alamat'] = $_POST['alamat'];

    $_SESSION['catatan'] = $_POST['catatan'];



    header("location:pembayaran.php");

    exit;

}


?>



<!DOCTYPE html>

<html lang="id">

<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Checkout Crepes n'Co
</title>




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

max-width:1200px;

margin:50px auto;

}




h1{

font-size:42px;

margin-bottom:35px;

}



h1 span{

color:#e52f7c;

}





/* GRID UTAMA */


.checkout-layout{


display:grid;

grid-template-columns:1fr 1fr;

gap:35px;

align-items:stretch;


}







/* CARD */


.box,
.checkout-box{


background:white;

padding:30px;

border-radius:25px;

box-shadow:0 8px 25px rgba(0,0,0,.08);

}





.box h2,
.checkout-box h2{


font-size:23px;

margin-bottom:20px;


}






/* ALAMAT */


.alamat{


border-left:8px solid #173f63;

display:flex;

flex-direction:column;

min-height:650px;

}






.form-group{

margin-bottom:18px;

}



.form-group label{

display:block;

font-weight:bold;

margin-bottom:8px;

}




.form-group input,
.form-group textarea{


width:100%;

padding:15px;

border-radius:12px;

border:1px solid #ddd;

font-size:16px;

}



.form-group textarea{

resize:none;

height:120px;

}




.form-group:last-child textarea{

height:90px;

}








/* KANAN */


.right-side{


display:flex;

flex-direction:column;

gap:20px;

}





.pengiriman{

border-left:8px solid #20b968;

}



.pembayaran{

border-left:8px solid #f5b400;

}



.review{

border-left:8px solid #e52f7c;

}


/* CHECKOUT SUMMARY */


.checkout-box{


border-left:8px solid #e52f7c;

}



.detail-row{


display:flex;

justify-content:space-between;

margin:18px 0;

font-size:17px;


}



.total-title{

margin-top:25px;

font-size:18px;

}



.total{


font-size:36px;

font-weight:bold;

color:#e52f7c;

margin:10px 0 25px;


}



.btn-bayar{


width:100%;

padding:18px;

border:none;

border-radius:30px;

background:#20b968;

color:white;

font-size:18px;

font-weight:bold;

cursor:pointer;

}



.btn-bayar:hover{

background:#159653;

}





.button-group{


display:flex;

gap:15px;

margin-top:25px;


}



.btn{


flex:1;

padding:15px;

border-radius:30px;

text-align:center;

text-decoration:none;

font-weight:bold;


}



.home{


background:#ffcf24;

color:#173f63;


}



.cart{


background:#173f63;

color:white;


}




@media(max-width:800px){


.checkout-layout{

grid-template-columns:1fr;

}


.alamat{

min-height:auto;

}


.button-group{

flex-direction:column;

}


}



</style>


</head>



<body>



<div class="container">



<h1>

Checkout <span>Crepes n'Co</span>

</h1>






<div class="checkout-layout">







<!-- KIRI -->

<div class="box alamat">


<h2>

📍 Alamat Pemesan

</h2>




<form method="POST">



<div class="form-group">


<label>

Nama Pemesan

</label>


<input

type="text"

name="nama"

placeholder="Masukkan nama lengkap"

required>


</div>






<div class="form-group">


<label>

Nomor WhatsApp

</label>


<input

type="number"

name="wa"

placeholder="08123456789"

required>


</div>






<div class="form-group">


<label>

Alamat Pengiriman

</label>


<textarea

name="alamat"

placeholder="Masukkan alamat lengkap"

required></textarea>


</div>







<div class="form-group">


<label>

Catatan Pesanan

</label>


<textarea

name="catatan"

placeholder="Contoh: tambah saus, jangan pedas, letakkan di depan rumah">

</textarea>


</div>




</div>









<!-- KANAN -->


<div class="right-side">






<div class="box pengiriman">


<h2>

🚚 Pengiriman

</h2>


<p>

Kurir:

<b>

Crepes n'Co Delivery

</b>

</p>



<br>



<p>

Estimasi:

<b>

30 - 60 menit

</b>

</p>


</div>








<div class="box pembayaran">


<h2>

💳 Pembayaran

</h2>


<p>

Metode pembayaran dipilih setelah checkout.

</p>


<br>


<ul style="margin-left:20px;">


<li>

QRIS

</li>


<li>

Transfer Bank

</li>


<li>

Cash

</li>


</ul>


</div>








<div class="box review">


<h2>

📝 Review Pesanan

</h2>


<p>

Jumlah item:

<b>

<?=count($_SESSION['keranjang']);?>

</b>

</p>



<br>



<p>

Total pesanan:

<b>

Rp <?=number_format($total,0,",",".");?>

</b>

</p>



</div>









<!-- CHECKOUT -->


<div class="checkout-box">


<h2>

Checkout

</h2>






<div class="detail-row">


<span>

Jumlah Produk

</span>


<b>

<?=count($_SESSION['keranjang']);?> Item

</b>


</div>






<div class="detail-row">


<span>

Pengiriman

</span>


<b>

Gratis

</b>


</div>






<hr>




<div class="total-title">

Total Pembayaran

</div>




<div class="total">


Rp <?=number_format($total,0,",",".");?>

</div>







<button

type="submit"

name="lanjut"

class="btn-bayar">


Bayar Sekarang


</button>







<div class="button-group">


<a href="index.php" class="btn home">

🏠 Beranda

</a>




<a href="keranjang.php" class="btn cart">

🛒 Keranjang

</a>



</div>





</div>








</div>






</form>



</div>



</body>


</html>