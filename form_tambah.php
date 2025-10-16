<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card p-3 m-3 mt-5 w-50 shadow-lg mx-auto">
            <div class="justify-content-center align-items-center mb-3">
                <h3 class="mb-4">Tambah Data</h3>
                <form action="tambah_buku.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id=""  rows="5" cols="30"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
                
            </div>
        </div>
    </div>
   
  
    <script src="dist/js/bootstrap.min.bundle.js"></script>
</body>
</html>