<?php

session_start();

require_once 'koneksi.php';


$id = $_GET['id'] ?? '';



$produk = [


"chicken-burger" => [

"nama"=>"Chicken Burger",

"harga"=>18000,

"diskon"=>"30%",

"gambar"=>"gambar/chicken burger.png",

"deskripsi"=>"Crepes gurih dengan isian ayam crispy yang renyah di luar dan lembut di dalam, dipadukan dengan sayuran segar serta saus spesial. Kombinasi bahan yang lezat menghasilkan cita rasa yang nikmat dan cocok dinikmati kapan saja."

],



"beef-burger" => [

"nama"=>"Beef Burger",

"harga"=>20000,

"diskon"=>"",

"gambar"=>"gambar/beef burger.png",

"deskripsi"=>"Crepes gurih dengan isian beef pilihan yang lezat, dipadukan dengan keju, sayuran segar, dan saus spesial. Memiliki perpaduan rasa gurih dan tekstur yang menggugah selera, cocok untuk kamu yang menyukai hidangan praktis dengan cita rasa burger."

],



"smoked-beef" => [

"nama"=>"Smoked Beef + Sosis",

"harga"=>18000,

"diskon"=>"",

"gambar"=>"gambar/smoked beef.png",

"deskripsi"=>"Crepes gurih dengan perpaduan smoked beef dan sosis yang memberikan cita rasa khas dan nikmat. Dilengkapi saus pilihan yang menambah kelezatan di setiap gigitan. Pilihan tepat untuk kamu yang menyukai kombinasi daging dengan rasa gurih."

],



"nutella-cheese" => [

"nama"=>"Nutella Cheese",

"harga"=>20000,

"diskon"=>"",

"gambar"=>"gambar/nutella cheese.png",

"deskripsi"=>"Crepes manis dengan perpaduan selai cokelat Nutella yang lembut dan keju yang gurih. Kombinasi rasa manis dan asin menciptakan sensasi yang nikmat di setiap gigitan. Cocok untuk kamu yang menyukai perpaduan cokelat dan keju."

],



"silverqueen" => [

"nama"=>"SilverQueen",

"harga"=>18000,

"diskon"=>"",

"gambar"=>"gambar/silver queen.png",

"deskripsi"=>"Crepes manis dengan isian cokelat SilverQueen yang memberikan cita rasa cokelat khas dan lezat. Dipadukan dengan kulit crepes yang lembut serta taburan cokelat yang menambah kenikmatan. Pilihan sempurna bagi pencinta cokelat.."

],



"cadbury" => [

"nama"=>"Cadbury",

"harga"=>18000,

"diskon"=>"",

"gambar"=>"gambar/cadbury.png",

"deskripsi"=>"Crepes dengan isian cokelat Cadbury yang lembut dan memiliki rasa manis khas cokelat susu. Setiap gigitan menghadirkan perpaduan kulit crepes dan cokelat yang nikmat. Cocok menjadi camilan manis untuk menemani waktu santai.."

],



"banana-ceres" => [

"nama"=>"Banana Ceres",

"harga"=>18000,

"diskon"=>"",

"gambar"=>"gambar/banana ceres.png",

"deskripsi"=>"Crepes manis dengan kombinasi pisang dan meses cokelat yang menghadirkan perpaduan rasa manis dan lezat. Tekstur pisang yang lembut berpadu dengan taburan meses cokelat, menjadikannya camilan favorit untuk segala suasana."

],



"lotus" => [

"nama"=>"Lotus Cheese",

"harga"=>20000,

"diskon"=>"",

"gambar"=>"gambar/lotus.png",

"deskripsi"=>"Crepes manis dengan perpaduan selai Lotus Biscoff yang memiliki cita rasa karamel khas dan keju yang gurih. Kombinasi rasa manis dan gurih memberikan sensasi berbeda yang memanjakan lidah. Cocok untuk kamu yang ingin mencoba varian crepes dengan rasa istimewa."

]


];





if(!isset($produk[$id])){

die("Produk tidak ditemukan");

}



$data=$produk[$id];


?>



<!DOCTYPE html>

<html lang="id">


<head>


<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>

<?= $data['nama']; ?> | Crepes n'Co

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



header{

height:85px;

background:white;

display:flex;

align-items:center;

justify-content:space-between;

padding:0 5%;

box-shadow:0 3px 15px rgba(0,0,0,.08);

}



.logo img{

width:95px;

}



.search{

width:35%;

padding:12px 20px;

border-radius:30px;

border:1px solid #ddd;

}



.nav a{

text-decoration:none;

color:#173f63;

font-weight:bold;

margin-left:25px;

}



.container{

width:90%;

max-width:1200px;

margin:35px auto;

}



.produk-atas{

display:flex;

gap:30px;

align-items:flex-start;

}



.produk-gambar{

width:50%;

background:white;

padding:25px;

border-radius:25px;

box-shadow:0 8px 25px rgba(0,0,0,.08);

}


.produk-gambar img.main{

width:100%;

height:270px;

object-fit:contain;

}


.thumbnail{

display:flex;

gap:15px;

margin-top:20px;

}


.thumbnail img{

width:70px;

height:70px;

object-fit:cover;

border-radius:12px;

border:1px solid #ddd;

}
/* DETAIL KANAN */

.detail-produk{

width:50%;

background:white;

padding:30px;

border-radius:25px;

box-shadow:0 8px 25px rgba(0,0,0,.08);

}



.detail-produk h1{

font-size:38px;

margin-bottom:15px;

color:#173f63;

}



.rating{

color:#f5b400;

font-size:17px;

margin-bottom:20px;

}



.harga{

font-size:34px;

font-weight:bold;

color:#e52f7c;

margin-bottom:20px;

}



.harga span{

font-size:16px;

color:#999;

text-decoration:line-through;

margin-left:10px;

}



.diskon{

background:#ffe0ed;

color:#e52f7c;

padding:8px 15px;

border-radius:20px;

font-size:14px;

font-weight:bold;

margin-left:10px;

}



.deskripsi{

font-size:17px;

line-height:1.6;

margin:20px 0;

color:#444;

}



.detail-produk h3{

margin-bottom:15px;

}



/* VARIAN */

.variant{

display:flex;

gap:12px;

flex-wrap:wrap;

}



.variant button{

padding:12px 25px;

border-radius:15px;

border:1px solid #ddd;

background:white;

font-size:15px;

color:#173f63;

cursor:pointer;

}



.variant button.active,
.variant button:hover{

background:#e52f7c;

color:white;

border-color:#e52f7c;

}





/* JUMLAH */

.jumlah{

display:flex;

align-items:center;

gap:15px;

margin:25px 0;

font-size:18px;

}



.jumlah button{

width:40px;

height:40px;

border:none;

border-radius:10px;

background:#eee;

font-size:20px;

cursor:pointer;

}



.jumlah input{

width:55px;

height:40px;

text-align:center;

border:1px solid #ddd;

border-radius:10px;

}




/* TOMBOL */

.aksi{

display:flex;

gap:15px;

}



.aksi a{

padding:15px 30px;

border-radius:30px;

font-size:16px;

font-weight:bold;

text-decoration:none;

display:inline-block;

cursor:pointer;

}



.cart{

background:#e52f7c;

color:white;

}



.buy{

background:#173f63;

color:white;

}



.cart:hover{

background:#c91f67;

}



.buy:hover{

background:#102d48;

}



.wishlist{

margin-top:25px;

font-weight:bold;

}



.kembali{

display:inline-block;

margin-top:25px;

color:#173f63;

text-decoration:none;

font-weight:bold;

}





/* BAGIAN BAWAH */


.info-produk{

margin-top:30px;

background:white;

padding:35px;

border-radius:25px;

box-shadow:0 8px 25px rgba(0,0,0,.08);

}



.tab-menu{

display:flex;

gap:40px;

border-bottom:1px solid #ddd;

margin-bottom:30px;

}



.tab-btn{

border:none;

background:none;

font-size:18px;

font-weight:bold;

color:#173f63;

cursor:pointer;

padding:12px 0;

}



.tab-btn.active{

color:#e52f7c;

border-bottom:3px solid #e52f7c;

}



.tab-content{

display:none;

}



.tab-content.active{

display:block;

}



.tab-content h2{

font-size:30px;

margin-bottom:20px;

}



.review{

padding:15px 0;

}



.star{

font-size:22px;

margin-bottom:8px;

}



.btn-ulasan{

display:inline-block;

background:#e52f7c;

color:white;

padding:12px 25px;

border-radius:25px;

text-decoration:none;

font-weight:bold;

}




@media(max-width:900px){

.produk-atas{

flex-direction:column;

}



.produk-gambar,
.detail-produk{

width:100%;

}



.aksi{

flex-direction:column;

}


}


</style>


</head>


<body>


<header>


<div class="logo">

<img src="gambar/logo2.png">

</div>



<input class="search" placeholder="Cari menu...">



<div class="nav">


<a href="menu.php">

Menu

</a>


<a href="keranjang.php">

🛒 Cart

</a>


</div>


</header>
<div class="container">


<div class="produk-atas">



<!-- FOTO PRODUK -->

<div class="produk-gambar">


<img 
class="main"
src="<?= $data['gambar']; ?>">



<div class="thumbnail">


<img src="<?= $data['gambar']; ?>">


<img src="<?= $data['gambar']; ?>">


<img src="<?= $data['gambar']; ?>">



</div>



</div>







<!-- DETAIL KANAN -->


<div class="detail-produk">


<h1>

<?= $data['nama']; ?>

</h1>



<div class="rating">

⭐ 4.8 | 120 Ulasan | 350 Terjual

</div>




<div class="harga">


Rp <?=number_format($data['harga'],0,",",".");?>



<?php if($data['diskon']!=""){ ?>

<span>

Rp 25.000

</span>



<label class="diskon">

Diskon <?= $data['diskon']; ?>

</label>


<?php } ?>


</div>





<p class="deskripsi">

<?= $data['deskripsi']; ?>

</p>





<h3>

Pilih Varian:

</h3>




<div class="variant">


<button class="active">

Original

</button>



<button>

Cheese

</button>



<button>

Extra Topping

</button>


</div>








<div class="jumlah">


Jumlah :



<button 
type="button"
onclick="kurang()">

-

</button>



<input 

id="jumlah"

value="1"

readonly>



<button 

type="button"

onclick="tambah()">

+

</button>



</div>







<div class="aksi">



<a 

id="btnKeranjang"

href="tambah.php?id=<?=$id?>&jumlah=1"

class="cart">

🛒 Tambah ke Keranjang

</a>




<a 

href="checkout.php"

class="buy">

Beli Sekarang

</a>



</div>







<p class="wishlist">

♡ Tambahkan ke Wishlist

</p>






<a href="menu.php" class="kembali">

← Kembali ke Menu

</a>




</div>



</div>









<!-- INFORMASI -->



<div class="info-produk">



<div class="tab-menu">



<button

class="tab-btn active"

onclick="openTab(event,'deskripsi')">

Deskripsi Produk

</button>





<button

class="tab-btn"

onclick="openTab(event,'spesifikasi')">

Spesifikasi

</button>





<button

class="tab-btn"

onclick="openTab(event,'ulasan')">

Ulasan Pembeli

</button>




</div>









<!-- DESKRIPSI -->


<div id="deskripsi" class="tab-content active">


<h2>

Deskripsi Produk

</h2>


<p>

<?= $data['deskripsi']; ?>

</p>


<br>


<p>

Crepes dibuat menggunakan bahan premium dengan tekstur renyah dan isian melimpah.

</p>


</div>








<!-- SPESIFIKASI -->


<div id="spesifikasi" class="tab-content">


<h2>

Spesifikasi

</h2>



<ul>


<li>Bahan berkualitas tinggi</li>


<li>Dibuat fresh setiap hari</li>


<li>Tersedia berbagai pilihan topping</li>


<li>Cocok untuk semua kalangan</li>


</ul>


</div>









<!-- ULASAN -->


<div id="ulasan" class="tab-content">


<h2>

Ulasan Pembeli

</h2>




<?php


$query_ulasan=mysqli_query($conn,


"SELECT * FROM ulasan

WHERE id_produk='$id'

ORDER BY id_ulasan DESC"

);





if(mysqli_num_rows($query_ulasan)>0){



while($u=mysqli_fetch_assoc($query_ulasan)){



?>


<div class="review">



<div class="star">


<?php


for($i=0;$i<$u['rating'];$i++){

echo "⭐";

}


?>


</div>




<p>

<?=htmlspecialchars($u['komentar']);?>

</p>



<b>

<?=htmlspecialchars($u['nama_user']);?>

</b>



</div>



<hr>



<?php


}


}else{


echo "<p>Belum ada ulasan.</p>";


}


?>




<br>



<a 

href="beri_ulasan.php?id=<?=$id?>"

class="btn-ulasan">

⭐ Beri Ulasan

</a>




</div>



</div>




</div>








<script>


// TAB

function openTab(event,id){


let content=document.querySelectorAll(".tab-content");


let button=document.querySelectorAll(".tab-btn");



content.forEach(function(item){

item.classList.remove("active");

});



button.forEach(function(item){

item.classList.remove("active");

});



document.getElementById(id).classList.add("active");


event.currentTarget.classList.add("active");


}







// JUMLAH

function tambah(){


let jumlah=document.getElementById("jumlah");


jumlah.value=parseInt(jumlah.value)+1;


updateKeranjang();


}





function kurang(){


let jumlah=document.getElementById("jumlah");


if(parseInt(jumlah.value)>1){


jumlah.value=parseInt(jumlah.value)-1;


updateKeranjang();


}


}






function updateKeranjang(){


let jumlah=document.getElementById("jumlah").value;


let tombol=document.getElementById("btnKeranjang");


let url=new URL(tombol.href);


url.searchParams.set("jumlah",jumlah);


tombol.href=url;


}








// VARIAN


let varian=document.querySelectorAll(".variant button");



varian.forEach(function(btn){


btn.onclick=function(){


varian.forEach(function(x){

x.classList.remove("active");

});


this.classList.add("active");


}


});



</script>


</body>

</html>