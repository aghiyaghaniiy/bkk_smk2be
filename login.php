<?php
session_start();

$error = "";

if(isset($_POST['username'])){
    $u = trim($_POST['username']);
    $p = trim($_POST['password']);

    if($u == "2526_02" && $p == "12345678"){
        $_SESSION['login'] = $u;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login BKK</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at top, #2c2c54, #0f0f1a);
        }

        .login-box{
            width: 350px;
            padding: 40px;
            border-radius: 20px;

            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(15px);

            border: 1px solid rgba(255,215,0,0.3);

            box-shadow: 
                0 0 20px rgba(255,215,0,0.2),
                0 0 60px rgba(255,215,0,0.1);

            animation: muncul 0.8s ease;
        }

        @keyframes muncul{
            from{
                opacity: 0;
                transform: translateY(30px);
            }
            to{
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-box h2{
            text-align: center;
            color: gold;
            margin-bottom: 20px;
            text-shadow: 0 0 10px gold;
        }

        .error{
            color: #ff4d4d;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .input-group{
            margin-bottom: 20px;
        }

        .input-group input{
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            outline: none;

            background: rgba(0,0,0,0.6);
            color: white;

            border: 1px solid rgba(255,255,255,0.1);
        }

        .input-group input:focus{
            border: 1px solid gold;
            box-shadow: 0 0 8px gold;
        }

        .btn{
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;

            background: linear-gradient(45deg, gold, orange);
            color: black;
            font-weight: bold;

            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover{
            transform: scale(1.05);
            box-shadow: 0 0 15px gold;
        }

        .footer{
            margin-top: 20px;
            text-align: center;
            color: #aaa;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <form class="login-box" method="POST">
        <h2>Login BKK</h2>

        <?php if($error != ""){ ?>
            <div class="error"><?= $error ?></div>
        <?php } ?>

        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="btn" type="submit">Login</button>

        <div class="footer">
            © 2026 BKK SMKN 2 Baleendah
        </div>
    </form>

</body>
</html>