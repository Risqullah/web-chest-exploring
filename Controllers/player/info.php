<?php
require_once('../../Views/header.php'); 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Game Terbaru</title>
    <link rel="stylesheet" href="../../Asset/Style.css">
    <style>
        .game-info-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .game-info-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .info-box {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .info-box h2 {
            margin-top: 0;
        }
        .info-box p {
            margin: 10px 0;
        }
        .info-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="game-info-container">
        <h1>Info Game Terbaru</h1>
        <?php
        require_once '../../Models/GameInfoModel.php';
        $gameInfoModel = new GameInfoModel();
        $infos = $gameInfoModel->getInfos();
        foreach ($infos as $info) {
    // Cek apakah gambar ada
    $gambarSrc = $info['gambar'] ? (filter_var($info['gambar'], FILTER_VALIDATE_URL) ? $info['gambar'] : "../../" . htmlspecialchars($info['gambar'])) : "";
    echo "<div class='info-box'>";
    echo "<h2>" . htmlspecialchars($info['title']) . "</h2>";
    echo "<p>" . htmlspecialchars($info['content']) . "</p>";
    echo "<p>Posted by: " . htmlspecialchars($info['author']) . "</p>";
    if ($gambarSrc) {
        echo "<img class='info-image' src='" . $gambarSrc . "' alt='Gambar " . htmlspecialchars($info['title']) . "'>";
    }
    echo "</div>";
}
        ?>
    </div>
</body>
</html>
<?php
require_once('../../Views/footer.php'); 
?>