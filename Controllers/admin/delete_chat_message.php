<?php

require_once '../../Models/ChatModel.php';

if (isset($_POST['delete_id'])) {
    $chatModel = new ChatModel();
    $chatModel->deleteMessage($_POST['delete_id']);
    header('Location: manage_chat.php');
}
?>