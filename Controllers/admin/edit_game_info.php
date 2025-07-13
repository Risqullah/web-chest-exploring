<?php
// Controllers/admin/edit_game_info.php
require_once '../../Core/function.php';
require_once '../../Models/GameInfoModel.php';

$gameInfoModel = new GameInfoModel();
$id = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $gambar = $_POST['gambar'] ?? ''; // Ambil dari POST, karena input type="url"

    // Pastikan editInfo dipanggil dengan benar
    if ($gameInfoModel->editInfo($id, $title, $content, $gambar)) { // Pastikan $gambar disertakan
        header('Location: game_infos.php');
        exit;
    } else {
        echo "Gagal menyimpan perubahan.";
    }
}

$info = $gameInfoModel->getInfoById($id);
require_once '../../Views/admin/edit_game_info.php';
?>
