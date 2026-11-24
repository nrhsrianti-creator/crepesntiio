<?php

session_start();


$produk = [

"beef-burger"=>[
    "nama"=>"Beef Burger",
    "harga"=>20000,
    "gambar"=>"gambar/beef burger.png"
],


"smoked-beef"=>[
    "nama"=>"Smoked Beef + Sosis",
    "harga"=>18000,
    "gambar"=>"gambar/smoked beef.png"
],


"chicken-burger"=>[
    "nama"=>"Chicken Burger",
    "harga"=>18000,
    "gambar"=>"gambar/chicken burger.png"
],


"nutella-cheese"=>[
    "nama"=>"Nutella Cheese",
    "harga"=>20000,
    "gambar"=>"gambar/nutella cheese.png"
],


"silverqueen"=>[
    "nama"=>"SilverQueen",
    "harga"=>18000,
    "gambar"=>"gambar/silver queen.png"
],


"cadbury"=>[
    "nama"=>"Cadbury",
    "harga"=>18000,
    "gambar"=>"gambar/cadbury.png"
],


"banana-ceres"=>[
    "nama"=>"Banana Ceres",
    "harga"=>18000,
    "gambar"=>"gambar/banana ceres.png"
],


"lotus"=>[
    "nama"=>"Lotus Cheese",
    "harga"=>20000,
    "gambar"=>"gambar/lotus.png"
]

];




$id=$_GET['id'];



if(isset($_SESSION['keranjang'][$id])){


    $_SESSION['keranjang'][$id]['jumlah']++;


}else{


    $_SESSION['keranjang'][$id]=[

        "nama"=>$produk[$id]['nama'],

        "harga"=>$produk[$id]['harga'],

        "gambar"=>$produk[$id]['gambar'],

        "jumlah"=>1

    ];

}



header("location:keranjang.php");

exit;


?>