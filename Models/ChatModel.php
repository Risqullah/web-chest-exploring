<?php
class ChatModel {
    private $db;

    public function __construct() {
        global $koneksi;
        if (!isset($koneksi)) {
            require_once '../../Core/function.php';
        }
        $this->db = $koneksi;
    }   

    public function sendMessage($message, $user_id) {
        $sql = "INSERT INTO messages (message, user_id, timestamp) VALUES (?, ?, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('si', $message, $user_id);
        return $stmt->execute();
    }

    public function getMessages() {
        $sql = "SELECT m.id, m.message, m.timestamp, u.username FROM messages m JOIN user u ON m.user_id = u.id ORDER BY m.timestamp asc";
        $result = $this->db->query($sql);
        $messages = [];
        while ($row = $result->fetch_assoc()) {
            $messages[] = $row;
        }
        return $messages;
    }

    public function deleteMessage($id) {
        $sql = "DELETE FROM messages WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }

    public function getUserIdByUsername($username) {
        $sql = "SELECT id FROM user WHERE username = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            return $row['id'];
        }
    }
}
?>