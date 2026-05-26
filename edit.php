<?php
session_start();

if(!isset($_SESSION['login'])){
header("Location:login.php");
exit;
}

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM lowongan WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['edit'])){

$perusahaan = $_POST['perusahaan'];
$posisi = $_POST['posisi'];
$lokasi = $_POST['lokasi'];
$status = $_POST['status'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn,"UPDATE lowongan SET

perusahaan='$perusahaan',
posisi='$posisi',
lokasi='$lokasi',
status='$status',
deskripsi='$deskripsi'

WHERE id='$id'
");

header("Location:index.php");
exit;

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Lowongan</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins;
}

body{
background:#111;
color:white;
display:flex;
}

.sidebar{
width:250px;
height:100vh;
background:black;
padding:30px;
border-right:3px solid gold;
position:fixed;
}

.sidebar h1{
color:gold;
text-align:center;
margin-bottom:40px;
}

.sidebar a{
display:block;
text-decoration:none;
color:white;
padding:15px;
margin-top:10px;
border-radius:10px;
}

.sidebar a:hover{
background:gold;
color:black;
}

.main{
margin-left:250px;
padding:30px;
width:100%;
}

.title{
color:gold;
margin-bottom:30px;
}

.form-box{
background:#1c1c1c;
padding:30px;
border-radius:20px;
border:1px solid gold;
}

input,textarea{
width:100%;
padding:15px;
margin-top:15px;
border:none;
border-radius:10px;
}

button{
margin-top:20px;
padding:12px 20px;
background:gold;
border:none;
border-radius:10px;
font-weight:bold;
cursor:pointer;
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

<h1 class="title">
Edit Lowongan
</h1>

<div class="form-box">

<form method="POST">

<input type="text" name="perusahaan"
value="<?php echo $d['perusahaan']; ?>">

<input type="text" name="posisi"
value="<?php echo $d['posisi']; ?>">

<input type="text" name="lokasi"
value="<?php echo $d['lokasi']; ?>">

<input type="text" name="status"
value="<?php echo $d['status']; ?>">

<textarea name="deskripsi"><?php echo $d['deskripsi']; ?></textarea>

<button type="submit" name="edit">
Update
</button>

</form>

</div>

</div>

</body>
</html>