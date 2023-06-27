<?php
include('koneksi.php');

$id_menu = $_GET['id_menu'];

$ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
$result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Link icon tab -->
  <link href="images/Home_Petshop/logo-removebg-preview.png" rel="shortcut icon">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Styling -->
  <style>
    /* Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Martel+Sans&display=swap');

    /* Global */
    html, body {
      max-width: 100%;
      overflow-x: hidden;
    }

    body {
      font-family: sans-serif;
      font-family: 'Martel Sans', sans-serif;
    }

    body p {
      font-size: 1.2em;
      color: #1f1f1f;
    }

    /* Navbar */
    .navbar {
      margin-top: 0;
      background-color: #1f1f1f;
      box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.241);
    }

    .navbar .nav-item .btn {
      transition: .3s all;
    }

    .navbar .nav-item .btn:hover {
      color: #ffd700;
    }

    .navbar ul li a {
      color: white;
      font-size: 1.3em;
    }

    .navbar .navbar-nav .nav-link {
      transition: .3s;
    }

    .navbar .navbar-nav .nav-link:hover {
      color: #ffd700;
    }

    .navbar .navbar-brand {
      font-size: 30px;
    }

    .navbar .navbar-toggler {
        color: white;
        font-size: 1.5em;
      }

    /* Edit*/
    .edit {
      margin-top: 150px;
      margin-bottom: 50px;
    }

    .edit .container {
      background-color: #edecec;
      border-radius: 10px;
    }

    .edit .card {
      background-color: #ffd700;
      box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.120);
      border: none;
    }
  </style>

  <title>Petshop Unpak Bogor Edit Produk</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/Home_Petshop/logo-removebg-preview.png" width="90" alt="" loading="lazy">
      </a>
      <a class="navbar-brand text-dark" href="user.php">
        <strong style="color: red;">Petshop</strong><span style="color: white;"> Unpak</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon d-flex align-items-center justify-content-center"><i class="fa-solid fa-list"></i></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link ml-3" href="admin.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-3" style="color: #ffd700;" href="daftar_menu.php">Data Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-3" href="pesanan.php"><i class="bi bi-cart-check-fill"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-3" href="logout.php"><i class="bi bi-box-arrow-right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Form Edit -->
  <section class="edit">
    <div class="container p-4 animate__animated animate__bounceInUp">
      <h3 class="text-center mb-5">EDIT PRODUK</h3>
      <div class="card p-5">
        <form method="POST" action="edit.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="menu1">Nama Produk</label>
            <input type="hidden" name="id_menu" value="<?php echo $result[0]['id_menu'] ?>">
            <input type="text" class="form-control" id="menu1" name="nama_menu" value="<?php echo $result[0]['nama_menu'] ?>">
          </div>
          <div class="form-group">
            <label for="#">Jenis Produk</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="jenis_menu" value="Makanan">Makanan
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="Minuman" name="jenis_menu">Minuman
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="Obat" name="jenis_menu">Obat
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="Kandang" name="jenis_menu">Kandang
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="Aksesoris" name="jenis_menu">Aksesoris
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="stok1">Stok</label>
            <input type="text" class="form-control" id="stok1" name="stok" value="<?php echo $result[0]['stok'] ?>">
          </div>
          <div class="form-group">
            <label for="harga1">Harga Produk</label>
            <input type="text" class="form-control" id="harga1" name="harga" value="<?php echo $result[0]['harga'] ?>">
          </div>
          <div class="form-group">
            <label for="gambar">Foto Produk</label>
            <input type="file" class="form-control-file border" id="gambar" name="gambar">
          </div><br>
          <button type="submit" class="btn btn-primary" name="tambah"><i class="bi bi-pencil-fill"></i> Edit</button>
          <button type="reset" class="btn btn-danger" name="reset"><i class="fa-solid fa-arrows-rotate"></i> Reset</button>
          <a type="submit" href="daftar_menu.php" class="btn btn-success"><i class="bi bi-backspace-fill"></i> Kembali</a>
      </div>
    </div>
  </section>
  <!-- Akhir Form Edit -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/4752e5dd73.js" crossorigin="anonymous"></script>
</body>

</html>