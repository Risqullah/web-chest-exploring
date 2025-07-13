<?php
session_start();

require_once('../../Core/function.php'); 
require_once('../../Models/ChatModel.php'); 
require_once('../../Views/header.php'); 
$chatModel = new ChatModel(); 
$messages = $chatModel->getMessages(); 

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'Anonymous'; // Aturkan default username jika session belum diinisialisasi
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $message = trim($_POST['message'] ?? ''); 
    $user_id = $chatModel->getUserIdByUsername($_SESSION['username']); 
    if ($user_id === null) {
        echo "Username not found.";
        exit;
    }
    if ($message !== '') { 
        $chatModel->sendMessage($message, $user_id); 
        header("Location: chat.php"); 
    } 
}
require_once('../../Views/player/chat/index.php'); 
require_once('../../Views/footer.php'); 
?>