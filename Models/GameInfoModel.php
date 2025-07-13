<?php
class GameInfoModel {
    private $db;

    public function __construct() {
        global $koneksi;
        if (!isset($koneksi)) {
            require_once '../../Core/function.php';
        }
        $this->db = $koneksi;
    }

    public function getInfos() {
        $sql = "SELECT * FROM game_info ORDER BY date_posted DESC";
        $result = $this->db->query($sql);
        $infos = [];
        while ($row = $result->fetch_assoc()) {
            $infos[] = $row;
        }
        return $infos;
    }

    public function getInfoById($id) {
        $sql = "SELECT * FROM game_info WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

public function addInfo($title, $content, $author, $gambar) {
    $sql = "INSERT INTO game_info (title, content, author, gambar) VALUES (?, ?, ?, ?)";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param('ssss', $title, $content, $author, $gambar);
    return $stmt->execute();
}


    public function editInfo($id, $title, $content, $gambar) {
    $sql = "UPDATE game_info SET title = ?, content = ?, gambar = ? WHERE id = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param('ssss', $title, $content, $gambar, $id);
    return $stmt->execute();
}

    public function deleteInfo($id) {
        $sql = "DELETE FROM game_info WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
?>