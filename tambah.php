<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}

include "koneksi.php";

if(isset($_POST['tambah'])){

    $perusahaan = $_POST['perusahaan'];
    $posisi = $_POST['posisi'];
    $lokasi = $_POST['lokasi'];
    $status = $_POST['status'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn,"INSERT INTO lowongan
    (perusahaan,posisi,lokasi,status,deskripsi)
    VALUES(
    '$perusahaan',
    '$posisi',
    '$lokasi',
    '$status',
    '$deskripsi'
    )");

    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Lowongan</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

/* 🔥 BACKGROUND SAMAIN LOGIN */
body{
    background: radial-gradient(circle at top, #2c2c54, #0f0f1a);
    color:white;
    display:flex;
}

/* SIDEBAR */
.sidebar{
    width:260px;
    height:100vh;

    background: rgba(0,0,0,0.55);
    backdrop-filter: blur(12px);

    padding:30px 20px;

    border-right:1px solid rgba(255,215,0,0.3);

    position:fixed;
}

.sidebar h1{
    color:gold;
    text-align:center;
    margin-bottom:40px;
    font-size:22px;

    text-shadow:0 0 10px gold;
}

.sidebar a{
    display:block;
    text-decoration:none;
    color:#ddd;
    padding:12px 15px;
    margin-top:12px;
    border-radius:10px;
    transition:0.3s;
    font-weight:500;
}

/* hover gold glow */
.sidebar a:hover{
    background: linear-gradient(45deg, gold, orange);
    color:black;
}

/* MAIN */
.main{
    margin-left:260px;
    padding:40px;
    width:100%;
}

/* TITLE */
.title{
    color:gold;
    margin-bottom:25px;
    font-size:28px;

    text-shadow:0 0 10px gold;
}

/* FORM BOX */
.form-box{
    background: rgba(255,255,255,0.05);
    padding:30px;
    border-radius:20px;

    border:1px solid rgba(255,215,0,0.3);

    backdrop-filter: blur(12px);

    max-width:600px;

    box-shadow:0 0 25px rgba(255,215,0,0.1);
}

/* INPUT */
input,textarea{
    width:100%;
    padding:12px 15px;
    margin-top:15px;

    border:none;
    border-radius:10px;
    outline:none;

    background: rgba(0,0,0,0.4);
    color:white;

    border:1px solid rgba(255,255,255,0.1);
}

/* focus gold */
input:focus, textarea:focus{
    border:1px solid gold;
    box-shadow:0 0 10px gold;
}

/* BUTTON */
button{
    margin-top:20px;
    padding:12px 20px;

    background: linear-gradient(45deg, gold, orange);
    border:none;
    border-radius:10px;

    font-weight:bold;
    cursor:pointer;
    width:100%;

    transition:0.3s;
}

button:hover{
    transform:scale(1.03);
    box-shadow:0 0 15px gold;
}
</style>

</head>

<body>

<div class="sidebar">
    <h1>BKK SMKN 2</h1>
    <a href="index.php">Dashboard</a>
    <a href="tambah.php">Tambah Lowongan</a>
    <a href="logout.php">Logout</a>
</div>

<div class="main">

    <h1 class="title">Tambah Lowongan</h1>

    <div class="form-box">
        <form method="POST">

            <input type="text" name="perusahaan" placeholder="Nama Perusahaan" required>

            <input type="text" name="posisi" placeholder="Posisi" required>

            <input type="text" name="lokasi" placeholder="Lokasi" required>

            <input type="text" name="status" placeholder="Status (Full-time / Part-time)" required>

            <textarea name="deskripsi" placeholder="Deskripsi pekerjaan..." rows="5" required></textarea>

            <button type="submit" name="tambah">Simpan Data</button>

        </form>
    </div>

</div>

</body>
</html>