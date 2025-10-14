<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
  <?php include 'navbar.html'; ?>

  <div class="container mt-5">
    <h3 class="text-start mb-4">Daftar Buku</h3>

    <div class="row">
      <?php while ($data = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="uploads/<?= $data['gambar'] ?>" class="card-img-top" alt="<?= $data['judul'] ?>" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title"><?= $data['judul'] ?></h5>
              <p class="card-text"><?= $data['deskripsi'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
