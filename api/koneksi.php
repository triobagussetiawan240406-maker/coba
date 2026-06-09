<?php
$host     = "localhost";
$user     = "root";        // default XAMPP
$password = "240406";            // default XAMPP kosong
$database = "pa_eko"; // TODO: ganti dengan nama database kamu

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>