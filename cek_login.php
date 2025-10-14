<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Query ke database
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

// Cek apakah user ditemukan
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);

    $_SESSION['username'] = $data['username'];
    $_SESSION['status'] = "login";

    header("Location: buku.php");
} else {
    header("Location: login.php?pesan=Username atau password salah!");
}
?>
