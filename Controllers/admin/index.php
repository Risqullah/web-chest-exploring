<?php
require_once '../../Core/function.php';
require_once '../../Models/GameInfoModel.php';

$gameInfoModel = new GameInfoModel();
$infos = $gameInfoModel->getInfos();
?>

<!-- Memanggil layout.php dari folder Views/admin -->
<?php include '../../Views/admin/index.php'; ?>