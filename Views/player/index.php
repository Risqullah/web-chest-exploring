<?php
namespace App\Views\Player;

require_once '../../Core/function.php';
require_once '../../Views/header.php';

// Konten lain...
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f8f9fa;
}

.main-container {
    max-width: 600px;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}
    </style>
</head>
<body>
    <div class="main-container">
    <h1>🎮 Welcome to PlayerZone! 🎮</h1>
    <p>Selamat datang di dunia Player Management System!</p>
    <p>Temukan kemudahan dalam menjelajah dan menemukan chest chest yang banyak</p>
    <p>Siap untuk menjelajah? Ayo mulai petualangan Anda!</p>
</div>
</body>
</html>
<?php
require_once '../../Views/footer.php';
?>