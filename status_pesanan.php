<?php

require_once 'koneksi.php';


$kode = $_GET['kode'] ?? '';


if(empty($kode)){

    die("Kode pesanan tidak ditemukan");

}



$stmt = $conn->prepare(

    "SELECT * FROM pelacakan_pesanan 
     WHERE kode_pesanan = ?"

);


$stmt->bind_param("s",$kode);


$stmt->execute();


$data = $stmt->get_result()->fetch_assoc();



if(!$data){

    die("Pesanan tidak ditemukan");

}



$status = $data['status'];



$step = [

    "Pesanan Dibuat",

    "Pembayaran Dikonfirmasi",

    "Sedang Diproses",

    "Siap Diambil",

    "Dalam Pengantaran",

    "Selesai"

];



?>


<!DOCTYPE html>

<html lang="id">


<head>


<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Status Pesanan | Crepes n'Co</title>



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

    max-width:700px;

    margin:50px auto;


}




.card{


    background:white;

    padding:40px;

    border-radius:25px;

    box-shadow:0 8px 25px rgba(0,0,0,.1);


}





h1{


    font-size:40px;

    margin-bottom:25px;


}



h1 span{


    color:#e52f7c;


}





.info{


    background:#fff8e5;

    padding:25px;

    border-radius:20px;

    margin:20px 0;

    line-height:1.8;


}





.timeline{


    margin-top:35px;


}





.item{


    display:flex;

    align-items:flex-start;

    gap:20px;

    margin:25px 0;


}





.dot{


    width:20px;

    height:20px;

    border-radius:50%;

    background:#aaa;

    margin-top:5px;


}





.active .dot{


    background:#20b968;


}




.active b{


    color:#20b968;


}





.item span{


    color:#20b968;

    font-weight:bold;


}





.tombol{


    display:flex;

    gap:15px;

    margin-top:35px;

    flex-wrap:wrap;


}




.btn{


    text-decoration:none;

    padding:15px 25px;

    border-radius:30px;

    font-weight:bold;

    color:white;


}




.btn-kembali{


    background:#e52f7c;


}



.btn-home{


    background:#173f63;


}



.btn:hover{


    opacity:.85;


}




@media(max-width:700px){


.card{


    padding:25px;


}



h1{


    font-size:32px;


}



.tombol{


    flex-direction:column;


}



.btn{


    text-align:center;

}


}




</style>


</head>




<body>



<div class="container">



<div class="card">



<h1>

📦 Status <span>Pesanan</span>

</h1>




<div class="info">


<b>Kode Pesanan :</b>

<?= htmlspecialchars($data['kode_pesanan']); ?>


<br>


<b>Produk :</b>

<br>

<?= nl2br(htmlspecialchars($data['detail_pesanan'])); ?>


<br>


<b>Total :</b>

Rp <?= number_format($data['total'],0,',','.'); ?>


</div>






<div class="timeline">


<?php


$aktif = array_search($status,$step);



foreach($step as $i=>$s):

?>


<div class="item <?=($i <= $aktif)?'active':''?>">


<div class="dot"></div>


<div>


<b>

<?= $s ?>

</b>


<br>



<?php if($i <= $aktif): ?>


<span>

✓ Selesai

</span>


<?php endif; ?>


</div>


</div>


<?php endforeach; ?>


</div>






<div class="tombol">


<a href="riwayat.php" class="btn btn-kembali">

← Kembali ke Riwayat

</a>




<a href="index.php" class="btn btn-home">

🏠 Beranda

</a>


</div>



</div>



</div>



</body>


</html>