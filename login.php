<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body class="bg-light"> 
         <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 25rem;">
      <h4 class="text-center mb-4">Login</h4>
      <form action="cek_login.php" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
    <script src="dist/js/bootstrap.min.bundle.js"></script>
</body>
</html>