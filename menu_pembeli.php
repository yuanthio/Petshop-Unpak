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

    <!-- Lightbox -->
    <link href="lightbox/dist/css/lightbox.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Styling -->
    <style>
      /* Fonts */
      @import url('https://fonts.googleapis.com/css2?family=Martel+Sans&display=swap');

      /* Global */
      html,
      body {
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

      .navbar .dropdown-menu {
        background-color: #ffd700;
      }

      .navbar .dropdown-menu a {
        color: black;
      }

      .navbar .dropdown-menu a:hover {
        color: #ffd700;
        background-color: #1f1f1f;
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

      /* wave */
      .wave {
        margin-top: 100px;
      }

      /* product */
      .product .card {
        transition: .3s all;
      }

      .product .container {
        background-color: #edecec;
        border-radius: 10px;
      }

      .product .header {
        position: relative;
      }

      .product span {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transform: scale(.1);
        transition: .3s all;
      }

      .product .card:hover span {
        opacity: 1;
        transform: scale(1);
      }

      .product span a {
        font-size: 3em;
        color: white;
        transition: .3s all;
      }

      .product span a:hover {
        color: #ffd700;
        transform: scale(1.1);
      }

      .product .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 10px 1px rgba(0, 0, 0, .150);
      }

      .product .card .btn:hover {
        background-color: #ffd700;
        color: black;
      }

      /* Large Footer */
      .large-footer {
        background-color: #ffd700;
      }

      .large-footer a {
        color: black;
        text-decoration: none;
        transition: .1s;
      }

      .large-footer a:hover {
        color: white;
      }

      .large-footer .whatsapp,
      .call {
        border-radius: 50px;
        color: white;
        padding: 10px 20px;
        transition: .3s all;
      }

      .large-footer .whatsapp:hover,
      .call:hover {
        transform: scale(.9);
      }

      .large-footer .whatsapp {
        background-color: green;
        margin-bottom: 10px;
      }

      .large-footer .call {
        background-color: red;
      }

      .large-footer .whatsapp,
      .call a {
        text-decoration: none;
      }

      /*Footer*/
      .footer {
        background-color: #1f1f1f;
        color: white;
      }

      .start {
        display: flex;
        justify-content: start;
      }

      .end {
        display: flex;
        justify-content: end;
      }

      /*Home*/
      .judul {
        margin-bottom: 120px;
      }

      .card .card-img {
        transition: .3s all;
      }

      .card .card-img:hover {
        transform: scale(1.1);
      }

      /* Media Query */
      @media (max-width: 576px) {

        /* Navbar */
        .navbar .text {
          display: none;
        }

        /* Product */
        .product {
          margin: 0 10px;
        }

        .product .card-body h5 {
          font-size: 1em;
        }

        /* Large Footer */
        .large-footer .img-start {
          text-align: start;
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

    <title>Petshop Unpak Bogor Shop</title>
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
              <a class="nav-link ml-3" href="user.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-3" style="color: #ffd700;" href="menu_pembeli.php">Shop</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="btn dropdown-toggle ml-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="dog&cat_training.html">Dog & Cat Training</a>
                  <a class="dropdown-item" href="pet_gromming.html">Pet Grooming</a>
                  <a class="dropdown-item" href="pet_care.html">Pet Care</a>
                  <a class="dropdown-item" href="home_cleaning.html">Home Cleaning</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-3" href="pesanan_pembeli.php"><i class="bi bi-cart-fill"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-3" href="logout.php"><i class="bi bi-box-arrow-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" class="wave" style="background-color: #ffd700;" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,85.3C274.3,75,343,117,411,149.3C480,181,549,203,617,202.7C685.7,203,754,181,823,154.7C891.4,128,960,96,1029,106.7C1097.1,117,1166,171,1234,202.7C1302.9,235,1371,245,1406,250.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <!-- Akhir Navbar -->

    <!-- Product -->
    <section class="product">
      <div class="container p-4">
        <h3 class="text-center text-uppercase font-weight-bold">Produk</h3>
        <div class="row mt-2">
          <?php
          include('koneksi.php');

          $query = mysqli_query($koneksi, 'SELECT * FROM produk');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
          ?>

          <?php foreach ($result as $result) : ?>
            <div class="col-lg-3 col-sm-6 col-6 mt-4">
              <div class="card">
                <div class="header">
                  <img src="upload/<?php echo $result['gambar'] ?>" width="120px" class="card-img-top img-fluid" alt="...">
                  <span class="d-flex justify-content-center align-items-center">
                    <a href="upload/<?php echo $result['gambar'] ?>" class="text-decoration-none" data-lightbox="image" data-title="<?php echo $result['nama_menu'] ?>">
                      <i class="bi bi-zoom-in"></i>
                    </a>
                  </span>
                </div>
                <div class="card-body">
                  <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
                  <label class="card-text harga"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
                  <a href="beli.php?id_menu=<?php echo $result['id_menu']; ?>" class="btn btn-success btn-sm btn-block "><i class="bi bi-cart-plus-fill"></i> Tambah Ke Keranjang</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- Akhir Product -->

    <!-- Large Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffd700" fill-opacity="1" d="M0,192L34.3,176C68.6,160,137,128,206,101.3C274.3,75,343,53,411,53.3C480,53,549,75,617,96C685.7,117,754,139,823,138.7C891.4,139,960,117,1029,101.3C1097.1,85,1166,75,1234,85.3C1302.9,96,1371,128,1406,144L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <section class="large-footer pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-4 img-start">
            <img src="images/Home_Petshop/logo-removebg-preview.png" width="120" alt="Logo" class="img-fluid">
          </div>
          <div class="col-lg-3 col-sm-6 mb-4">
            <h3 class="font-weight-bold">Services</h3>
            <span>
              <a href="">Dog & Cat Training</a>
            </span><br>
            <span>
              <a href="">Pet Grooming</a>
            </span><br>
            <span>
              <a href="">Pet Care</a>
            </span><br>
            <span>
              <a href="">Home Cleaning</a>
            </span>
          </div>
          <div class="col-lg-3 col-sm-6 mb-4">
            <h3 class="font-weight-bold">Products</h3>
            <span>
              <a href="">Dog Food</a>
            </span><br>
            <span>
              <a href="">Cat Food</a>
            </span><br>
            <span>
              <a href="">Veterinary Medicine</a>
            </span><br>
            <span>
              <a href="">Animal Cage</a>
            </span>
          </div>
          <div class="col-lg-3 col-sm-6 mb-4">
            <h3 class="font-weight-bold">Contact Us</h3>
            <div class="row">
              <a href="">
                <div class="whatsapp">
                  <span><i class="bi bi-whatsapp"></i> Whatsapp : 0895336035920</span>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="">
                <div class="call">
                  <span><i class="bi bi-telephone-fill"></i> Call : 0895336035920</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Large Footer -->

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

    <!-- Js Lightbox -->
    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
  </body>

  </html>
<?php } ?>