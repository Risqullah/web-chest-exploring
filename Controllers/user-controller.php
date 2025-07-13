<?php
namespace App\Controllers;

use App\Models\UserModel;

class UserController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        $users = $this->userModel->getUsers();
        // Lihat daftar penggunaan di view
    }

    public function addUser() {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $role = $_POST['role'] ?? '';

        $this->userModel->addUser($username, $password, $role);
        header('Location: index.php');
    }

    public function deleteUser() {
        $id = $_POST['id'] ?? '';

        $this->userModel->deleteUser($id);
        header('Location: index.php');
    }

    public function editUser() {
        $id = $_POST['id'] ?? '';
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $role = $_POST['role'] ?? '';

        $this->userModel->editUser($id, $username, $password, $role);
        header('Location: index.php');
    }
}