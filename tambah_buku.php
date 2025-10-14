<?php

include 'koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];

if ($gambar !=""){
    $target_dir="uploads/";
        if (!is_dir($target_dir)) {
        mkdir($target_dir);
}
        $target_file = $target_dir . basename($gambar);
        move_uploaded_file($_FILES['gambar']['tmp_name'],$target_file);
}

$query = "INSERT INTO buku (judul, deskripsi, gambar) VALUES ('$judul','$deskripsi','$gambar')";
$result = mysqli_query($conn, $query);

if ($result){
    header("location: buku.php");
} else {
    echo "Gagagl menambah buku" . mysqli_error($conn);
}
