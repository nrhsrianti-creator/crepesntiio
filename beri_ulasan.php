<?php

session_start();

$id = $_GET['id'] ?? '';

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Beri Ulasan | Crepes n'Co</title>


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

    max-width:600px;

    margin:50px auto;

}




.card{

    background:white;

    padding:35px;

    border-radius:25px;

    box-shadow:0 8px 25px rgba(0,0,0,.08);

}




h1{

    text-align:center;

    font-size:32px;

    margin-bottom:30px;

}



h1 span{

    color:#e52f7c;

}




label{

    display:block;

    font-weight:bold;

    margin-bottom:10px;

    margin-top:20px;

}





input,
select,
textarea{


    width:100%;

    padding:14px;

    border-radius:15px;

    border:1px solid #ddd;

    font-size:16px;

    color:#173f63;

}



input:focus,
select:focus,
textarea:focus{

    outline:none;

    border-color:#e52f7c;

}




textarea{

    height:150px;

    resize:none;

}




button{


    width:100%;

    margin-top:25px;

    padding:15px;

    border:none;

    border-radius:30px;

    background:#e52f7c;

    color:white;

    font-size:17px;

    font-weight:bold;

    cursor:pointer;

}



button:hover{

    background:#c91f67;

}





.kembali{


    display:block;

    text-align:center;

    margin-top:20px;

    text-decoration:none;

    color:#173f63;

    font-weight:bold;

}



</style>


</head>


<body>



<div class="container">


<div class="card">



<h1>

Beri <span>Ulasan</span>

</h1>




<form action="simpan_ulasan.php" method="POST">



<input 
type="hidden"
name="produk_id"
value="<?= htmlspecialchars($id); ?>">






<label>

Nama Pembeli

</label>


<input

type="text"

name="nama_user"

placeholder="Masukkan nama kamu"

required>



<label>

Rating Produk

</label>



<select name="rating" required>


<option value="5">

⭐⭐⭐⭐⭐ Sangat Puas

</option>


<option value="4">

⭐⭐⭐⭐ Puas

</option>


<option value="3">

⭐⭐⭐ Cukup

</option>


<option value="2">

⭐⭐ Kurang

</option>


<option value="1">

⭐ Tidak Puas

</option>


</select>






<label>

Cerita Pengalaman Kamu

</label>



<textarea

name="komentar"

placeholder="Tulis pengalaman kamu..."

required></textarea>







<button type="submit">

⭐ Kirim Ulasan

</button>



</form>







<a href="detail_produk.php?id=<?= htmlspecialchars($id); ?>" class="kembali">

← Kembali ke Produk

</a>





</div>


</div>



</body>

</html>