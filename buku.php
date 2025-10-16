<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] != "login") {
    header("Location: index.php?pesan=Silahkan login terlebih dahulu!");
}
$result = mysqli_query($conn, "SELECT * FROM buku ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
        include 'navbar.html';
    ?>
     <div class="container my-4">
        <div class="card shadow-lg p-3 m-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Halaman Buku</h3>
                <a href="form_tambah.php" class="btn bg-primary text-white">tambah data</a>                      
            </div>

             <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead class="table-dark">
                            <tr>
                                <td>No</td>
                                <td>Judul</td>
                                <td>Gambar</td>
                                <td>Deskripsi</td>
                                <td>Created At</td>
                                <td>Updated At</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['judul'] ?></td>
                                <td>
                                <?php if ($row['gambar']) { ?>
                                <img src="uploads/<?= $row['gambar'] ?>" width="60">
                                <?php } ?>
                            </td>
                                <td><?= $row['deskripsi'] ?></td>
                                <td><?= $row['created_at'] ?></td>
                                <td><?= $row['updated_at'] ?></td>
                                <td>
                                <a class="btn btn-success" href="form_edit.php?id=<?= $row['id'] ?>">Edit</a>
                                <a class="btn btn-danger" href="hapus_buku.php?id=<?= $row['id'] ?>">Hapus</a>
                            </td>
                            </tr>
                            <?php } ?>  
                    </table>
                </div>  
                       
        </div>
     </div>
    <script src="dist/js/bootstrap.min.bundle.js"></script>
</body>
</html>