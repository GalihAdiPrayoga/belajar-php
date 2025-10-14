<?php
include "koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku</title>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="card p-4 mt-5 shadow-sm">
      <h3 class="mb-4 text-center">Edit Data Buku</h3>

      <form action="edit_buku.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <div class="mb-3">
          <label for="judul" class="form-label">Judul Buku</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul'] ?>" required>
        </div>

        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4"><?= $data['deskripsi'] ?></textarea>
        </div>

        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar Buku</label>
          <input type="file" class="form-control" id="gambar" name="gambar">
          <div class="mt-2">
            <p>Gambar saat ini:</p>
            <img src="uploads/<?= $data['gambar'] ?>" width="100">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
      </form>
    </div>
  </div>

  <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
