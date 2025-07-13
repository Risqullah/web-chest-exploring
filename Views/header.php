<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chest Explorer</title>
    <style>
        body {
            margin: 0;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #4a3f3f;
            color: white;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Chest Explorer</h1>
        <a href="index.php">Beranda</a>
        <a href="chat.php">Chat</a>
        <a href="menu-player.php">Pilihan Map</a>
        <a href="info.php">Info Game</a>
        <!-- Navigasi kembali ke folder induk tiga tingkat -->
        <a href="../../login.php">Logout</a>
    </div>