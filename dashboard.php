<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard BKK</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* 🔥 WARNA DISESUAIKAN LOGIN */
body{
    background: radial-gradient(circle at top, #2c2c54, #0f0f1a);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.container{
    width: 90%;
    max-width: 1000px;

    /* glass effect kayak login */
    background: rgba(255,255,255,0.05);
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 0 30px rgba(255,215,0,0.15);
    backdrop-filter: blur(15px);

    border: 1px solid rgba(255,215,0,0.3);
}

.title{
    text-align: center;
    margin-bottom: 30px;
}

.title h1{
    font-size: 38px;
    color: gold;
    text-shadow: 0 0 10px gold;
}

.title p{
    color: #ddd;
    margin-top: 5px;
}

.welcome{
    text-align: center;
    font-size: 14px;
    color: #aaa;
    margin-top: 10px;
}

/* MENU CARD */
.menu{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
    margin-top: 25px;
}

.card{
    background: rgba(0,0,0,0.4);
    border: 1px solid rgba(255,215,0,0.3);
    border-radius: 15px;
    padding: 30px 20px;
    text-align: center;
    transition: 0.3s;
    cursor: pointer;
    box-shadow: 0 0 15px rgba(255,215,0,0.05);
}

.card i{
    font-size: 30px;
    margin-bottom: 10px;
    color: gold;
}

/* hover efek glow */
.card:hover{
    transform: translateY(-10px) scale(1.03);
    background: rgba(255,215,0,0.15);
    box-shadow: 0 0 20px gold;
}

.card:hover i,
.card:hover a{
    color: black;
}

.card a{
    text-decoration: none;
    color: gold;
    font-size: 18px;
    font-weight: bold;
    display: block;
}

.footer{1

<div class="container">

    <div class="title">
        <h1>Dashboard BKK SMKN 2 Baleendah</h1>
        <p>Sistem Informasi Bursa Kerja Khusus</p>
        <div class="welcome">👋 Selamat datang, Admin!</div>
    </div>

    <div class="menu">

        <div class="card">
            <i class="fas fa-database"></i>
            <a href="index.php">Data Lowongan</a>
        </div>

        <div class="card">
            <i class="fas fa-plus-circle"></i>
            <a href="tambah.php">Tambah Lowongan</a>
        </div>

        <div class="card">
            <i class="fas fa-right-from-bracket"></i>
            <a href="logout.php">Logout</a>
        </div>

    </div>

    <div class="footer">
        © 2026 BKK SMKN 2 Baleendah
    </div>

</div>

</body>
</html>