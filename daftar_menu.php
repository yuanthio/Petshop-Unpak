<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("location: login.php");
} else {
?>

  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link icon tab -->
    <link href="images/Home_Petshop/logo-removebg-preview.png" rel="shortcut icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Styling -->
    <style>
      /* Fonts */
      @import url('https://fonts.googleapis.com/css2?family=Martel+Sans&display=swap');

      /* Global */
      html {
        scroll-behavior: smooth;
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

      /* Product */
      .product {
        margin-top: 150px;
        margin-bottom: 100px;
      }

      .product .container {
        background-color: #edecec;
        border-radius: 10px;
      }

      .product .btn-primary {
        transition: .3s all;
      }

      .product .btn-primary:hover {
        background-color: #ffd700;
        color: #1f1f1f;
      }

      .product .btn-success {
        transition: .3s all;
      }

      .product .btn-success:hover {
        background-color: #ffd700;
        color: #1f1f1f;
      }

      /* Footer */
      .footer {
        background-color: #1f1f1f;
        color: white;
      }

      .footer .start {
        display: flex;
        justify-content: start;
      }

      .footer .end {
        display: flex;
        justify-content: end;
      }

      /* Media Query */
      @media (max-width: 576px) {

        /* Navbar */
        .navbar .text {
          display: none;
        }

        /* Daftar Menu */
        .product {
          margin-right: 10px;
          margin-left: 10px;
        }

      }

      @media (max-width: 768px) {

        /* Footer */
        .footer .start {
          text-align: center;
        }

        .footer .end {
          display: flex;
          justify-content: center;
        }
      }
    </style>

    <title>Petshop Unpak Bogor Daftar Produk</title>
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/Home_Petshop/logo-removebg-preview.png" width="90" alt="" loading="lazy">
        </a>
        <a class="navbar-brand text-dark text" href="user.php">
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

    <!-- Product -->
    <section class="product">
      <div class="container p-4">
        <a href="tambah_menu.php" class="btn btn-success"><i class="bi bi-plus-lg"></i> TAMBAH DAFTAR PRODUCT</a>
        <div class="row mt-4">

          <?php
          include('koneksi.php');
          $query = mysqli_query($koneksi, 'SELECT * FROM produk');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
          ?>

          <?php foreach ($result as $result) : ?>
            <div class="col-lg-3 col-sm-6 mb-4 col-6">
              <div class="card">
                <img src="upload/<?php echo $result['gambar'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
                  <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                  <a href="edit_menu.php?id_menu=<?php echo $result['id_menu']  ?>" class="btn btn-primary btn-sm btn-block hover"><i class="bi bi-pencil-fill"></i> Edit</a>

                  <a href="hapus_menu.php?id_menu=<?php echo $result['id_menu']  ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Produk ini?');" class="btn btn-danger btn-sm btn-block text-light"><i class="bi bi-trash-fill"></i> Hapus</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- Akhir Product -->

    <!-- Awal Footer -->
    <section class="footer">
      <div class="container py-5">
        <div class="row footer-body">
          <div class="col-md-6 start">
            <div class="copyright">
              <strong>Copyright</strong> <i class="far fa-copyright"></i> 2023 - Designed by 038_059_044_049_056</p>
            </div>
          </div>
          <div class="col-md-6 end">
            <div class="icon-contact">
              <label class="font-weight-bold">Follow Us </label>
              <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
              <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
              <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
            </div>
          </div>
        </div>
    </section>
    </div>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/4752e5dd73.js" crossorigin="anonymous"></script>
  </body>

  </html>
<?php } ?>