<?php

session_start();


if(!isset($_SESSION['keranjang'])){

    $_SESSION['keranjang']=[];

}



$promo=[


"buy2get1"=>[

"nama"=>"Paket Buy 2 Get 1",

"harga"=>40000,

"gambar"=>"gambar/promo1.png"

],



"diskon"=>[

"nama"=>"Promo Diskon 20%",

"harga"=>16000,

"gambar"=>"gambar/promo2.png"

],



"combo"=>[

"nama"=>"Paket Combo Crepes",

"harga"=>35000,

"gambar"=>"gambar/promo3.png"

]


];



$id=$_GET['id'];




if(isset($_SESSION['keranjang'][$id])){


$_SESSION['keranjang'][$id]['jumlah']++;


}else{


$_SESSION['keranjang'][$id]=[


"nama"=>$promo[$id]['nama'],

"harga"=>$promo[$id]['harga'],

"gambar"=>$promo[$id]['gambar'],

"jumlah"=>1


];


}



header("location:keranjang.php");

exit;


?>