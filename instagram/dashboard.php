<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Ambil nama pengguna dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Casino Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        .games {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .game {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            text-align: center;
            width: 100px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .game:hover {
            background-color: #e0e0e0;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Dashboard</h1>
    </header>

    <div class="container">
        <h2>Halo, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>Anda telah berhasil login ke akun Anda.</p>
        
        <div class="games">
            <div class="game">Game 1</div>
            <div class="game">Game 2</div>
            <div class="game">Game 3</div>
        </div>

        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>
