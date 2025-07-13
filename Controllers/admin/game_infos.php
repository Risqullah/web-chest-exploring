<?php

require_once '../../Models/GameInfoModel.php';
require_once '../../Views/admin/game_infos.php';

$gameInfoModel = new GameInfoModel();
$infos = $gameInfoModel->getInfos();
?>