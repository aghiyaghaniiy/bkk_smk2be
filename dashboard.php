<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}

include "koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM lowongan");
$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard BKK</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

/* BACKGROUND LOGIN THEME */
body{
    background: radial-gradient(circle at top, #2c2c54, #0f0f1a);
    color:#fff;
    display:flex;
}

/* SIDEBAR */
.sidebar{
    width:240px;
    height:100vh;
    background: rgba(0,0,0,0.55);
    backdrop-filter: blur(12px);
    border-right:1px solid rgba(255,215,0,0.3);
    padding:25px;
    position:fixed;
}

.sidebar h1{
    color:gold;
    text-align:center;
    margin-bottom:35px;
    font-size:20px;
    text-shadow:0 0 10px gold;
}

.sidebar a{
    display:block;
    text-decoration:none;
    color:#ddd;
    padding:12px;
    border-radius:10px;
    margin-bottom:10px;
    transition:0.3s;
}

.sidebar a:hover{
    background: linear-gradient(45deg, gold, orange);
    color:black;
}

/* MAIN */
.main{
    margin-left:240px;
    padding:35px;
    width:100%;
}

/* TITLE */
.title{
    font-size:26px;
    color:gold;
    margin-bottom:20px;
    text-shadow:0 0 10px gold;
}

/* CARD */
.card-box{
    display:flex;
    gap:15px;
    margin-bottom:25px;
}

.card{
    flex:1;
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(12px);
    padding:20px;
    border-radius:12px;
    border:1px solid rgba(255,215,0,0.2);
}

.card h2{
    font-size:14px;
    color:#ccc;
}

.card h1{
    margin-top:8px;
    font-size:28px;
    color:gold;
}

/* TABLE */
.table-box{
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(12px);
    padding:10px;
    border-radius:12px;
    border:1px solid rgba(255,215,0,0.2);
}

table{
    width:100%;
    border-collapse:collapse;
    font-size:14px;
}

th{
    background: linear-gradient(45deg, gold, orange);
    color:black;
    padding:12px;
}

td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid rgba(255,255,255,0.1);
    color:#ddd;
}

tr:hover{
    background: rgba(255,215,0,0.08);
}

/* BUTTON */
.btn{
    padding:6px 10px;
    border-radius:6px;
    text-decoration:none;
    font-size:12px;
    font-weight:500;
    margin:2px;
    display:inline-block;
    transition:0.2s;
}

.btn.edit{
    background: linear-gradient(45deg, gold, orange);
    color:black;
}

.btn.delete{
    background:#ff4d4d;
    color:white;
}

.btn:hover{
    transform:scale(1.05);
    box-shadow:0 0 10px gold;
}

/* EMPTY */
.empty{
    padding:25px;
    color:#aaa;
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

    <h1 class="title">Dashboard</h1>

    <div class="card-box">
        <div class="card">
            <h2>Total Lowongan</h2>
            <h1><?php echo $total; ?></h1>
        </div>

        <div class="card">
            <h2>Status</h2>
            <h1>Aktif</h1>
        </div>
    </div>

    <div class="table-box">

        <table>
            <tr>
                <th>No</th>
                <th>Perusahaan</th>
                <th>Posisi</th>
                <th>Lokasi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <?php
            if($total > 0){
                $no = 1;
                while($d = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['perusahaan']; ?></td>
                <td><?php echo $d['posisi']; ?></td>
                <td><?php echo $d['lokasi']; ?></td>
                <td><?php echo $d['status']; ?></td>
                <td>
                    <a class="btn edit" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                    <a class="btn delete" href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>

            <?php }} else { ?>

            <tr>
                <td colspan="6" class="empty">Belum ada data lowongan</td>
            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>