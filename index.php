<?php
session_start();

// Redirect ke login jika belum login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$username = htmlspecialchars($_SESSION['user']);
$user_id  = $_SESSION['user_id'];

// TODO: Ambil data dari database jika diperlukan
// Contoh:
// include 'koneksi.php';
// $stmt = $conn->prepare("SELECT * FROM data WHERE user_id = ?");
// $stmt->bind_param("i", $user_id);
// $stmt->execute();
// $result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>">

    <h2>Selamat datang, <?= $username ?>!</h2>

    <nav>
        <a href="index.php">Beranda</a> |
        <!-- TODO: Tambahkan menu navigasi lain di sini -->
        <a href="logout.php">Logout</a>
    </nav>

    <hr>

    <main>
        <!-- TODO: Isi konten halaman utama di sini -->
        <p>Kamu berhasil login sebagai <strong><?= $username ?></strong>.</p>
    </main>

</body>
</html>
