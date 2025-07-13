<?php
// Controllers/admin/delete_game_info.php
require_once '../../Core/function.php';
require_once '../../Models/GameInfoModel.php';

$gameInfoModel = new GameInfoModel();
$id = $_GET['id'] ?? null;
$gameInfoModel->deleteInfo($id);
header('Location: game_infos.php');
exit;
?>