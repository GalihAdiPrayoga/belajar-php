<?php
include "koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];

if ($gambar != "") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($gambar);
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);
    $query = "UPDATE buku SET judul='$judul', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$id";
} else {
    $query = "UPDATE buku SET judul='$judul', deskripsi='$deskripsi' WHERE id=$id";
}

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: buku.php");
} else {
    echo "Gagal update buku: " . mysqli_error($conn);
}
