<?php
require_once '../../Models/ChatModel.php';
require_once '../../Views/admin/manage_chat.php';
$chatModel = new ChatModel();
$messages = $chatModel->getMessages();
?>