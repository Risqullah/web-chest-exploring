<?php
require_once '../../Models/GameInfoModel.php';
$gameInfoModel = new GameInfoModel();
$id = $_GET['id'] ?? null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $gambar = $_POST['gambar'] ?? null; // Ambilkan nama field input gambar
    // Pastikan editInfo dipanggil dengan benar
    if ($gameInfoModel->editInfo($id, $title, $content, $gambar)) {
        header('Location: game_infos.php');
        exit;
    } else {
        echo "Gagal menyimpan perubahan.";
    }
}
// Ambil info berdasarkan ID
$info = $gameInfoModel->getInfoById($id);
require_once '../../Views/admin/edit_game_info.php';
?>
<!-- Views/admin/edit_game_info.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Info Game</title>
    <!-- Custom fonts for this template-->
    <link href="../../Asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../../Asset/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../Controllers/admin/index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../../Controllers/admin/index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Fitur</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Management:</h6>
                        <a class="collapse-item" href="../../Controllers/admin/manage_chat.php">Chat</a>
                        <a class="collapse-item active" href="../../Controllers/admin/game_infos.php">Info</a>
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Keluar
            </div>

            <!-- Nav Item - Keluar -->
            <li class="nav-item">
                <a class="nav-link" href="../../login.php">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Info Game</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Info Game</h6>
                                </div>
                                <div class="card-body">
                                    <form action="edit_game_info.php?id=<?= htmlspecialchars($info['id']) ?>" method="post" class="user" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= htmlspecialchars($info['id']) ?>">
                                            <div class="form-group">
                                                <label for="title" class="font-weight-bold text-primary">Judul:</label>
                                                <input type="text" class="form-control form-control-user" id="title" name="title" value="<?= htmlspecialchars($info['title']) ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="content" class="font-weight-bold text-primary">Isi:</label>
                                                <textarea class="form-control" id="content" name="content" rows="5" required><?= htmlspecialchars($info['content']) ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar" class="font-weight-bold text-primary">URL Gambar:</label>
                                                <input type="url" class="form-control form-control-user" id="gambar" name="gambar" value="<?= htmlspecialchars($info['gambar'] ?? '') ?>">
                                                <?php if (!empty($info['gambar'])): ?>
                                                    <img src="<?= htmlspecialchars($info['gambar']) ?>" alt="Preview Gambar" width="100" style="margin-top: 10px;">
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-success btn-user">
                                                    <i class="fas fa-save"></i> Simpan Perubahan
                                                </button>
                                                <a href="game_infos.php" class="btn btn-secondary btn-user">
                                                    <i class="fas fa-arrow-left"></i> Kembali
                                                </a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; Eclipse</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../Asset/vendor/jquery.min.js"></script>
    <script src="../../Asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../Asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../Asset/js/sb-admin-2.min.js"></script>
</body>
</html>