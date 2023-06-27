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

    <!-- Aos on Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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

      /* Slider */
      .slider {
        margin-top: 100px;
        color: white;
      }

      .slider p {
        font-size: 1.6em;
      }

      .slider .active {
        position: relative;
        display: flex;
      }

      .slider .span {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.4);
      }

      /* Keterangan */
      .keterangan {
        background-color: #ffd700;
      }

      .keterangan h2 {
        font-size: 3.2em;
      }

      .keterangan p {
        font-size: 1.2em;
      }

      /* Services */
      .services .card {
        border: none;
        box-shadow: 0 0 10px 1px rgba(0, 0, 0, .1);
        border-radius: 30px;
        transition: .3s all;
      }

      .services .card:hover {
        box-shadow: 0 0 10px 1px #ffd700;
        background-color: #1f1f1f;
        color: white;
      }

      .services .card p {
        transition: .3s all;
      }

      .services .card:hover p {
        color: white;
      }

      .services a {
        text-decoration: none;
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

      .link-menu .card .card-img {
        transition: .3s all;
      }

      .link-menu .card .card-img:hover {
        transform: scale(1.1);
      }

      .link-menu .btn {
        transition: .3s all;
      }

      .link-menu .btn:hover  {
        background-color: #ffd700;
        color: #1f1f1f;
      }
      /*Akhir Home*/

      /* Media Query */
      @media (max-width: 576px) {

        /* Navbar */
        .navbar .text {
          display: none;
        }

        /* Slider */
        .slider {
          color: white;
        }

        .slider h1 {
          font-size: 1.5em;
        }

        .slider p {
          display: none;
        }

        /* Keterangan */
        .keterangan .row {
          padding: 20px;
          text-align: center;
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

    <title>Petshop Unpak Bogor Dahsboard</title>
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/Home_Petshop/logo-removebg-preview.png" width="90" alt="" loading="lazy">
        </a>
        <a class="navbar-brand text text-dark" href="user.php">
          <strong style="color: red;">Petshop</strong><span style="color: white;"> Unpak</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon d-flex align-items-center justify-content-center"><i class="fa-solid fa-list"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link ml-3" style="color: #ffd700;" href="user.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-3" href="menu_pembeli.php">Shop</a>
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
    <!-- Akhir Navbar -->

    <!-- Slider -->
    <section class="slider">
      <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Home_Petshop/background_home_petshop.jpg" class="d-block w-100" alt="...">
            <div class="span d-flex align-items-center justify-content-center">
              <div class="rows text-center">
                <h1 class="display-4 font-weight-bold text-uppercase"><span style="color: red;">Petshop</span> Unpak Bogor</h1>
                <p class="lead font-weight-bold" style="color: white;">Terdapat berbagai kebutuhan untuk anabul anda...!<br>
                  Happy Shopping <img src="images/Admin/smile.png" width="50" alt=""></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/Home_Petshop/Pet-Grooming.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/Home_Petshop/pet-care.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/Home_Petshop/home-cleaning.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/Home_Petshop/pet-training.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" style="background-color: #ffd700;" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,32L24,37.3C48,43,96,53,144,80C192,107,240,149,288,144C336,139,384,85,432,101.3C480,117,528,203,576,213.3C624,224,672,160,720,149.3C768,139,816,181,864,218.7C912,256,960,288,1008,293.3C1056,299,1104,277,1152,229.3C1200,181,1248,107,1296,69.3C1344,32,1392,32,1416,32L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
    </svg>
    <!-- Akhir Slider -->

    <!-- Menu -->
    <div class="container">
      <div class="judul text-center">
        <h3 class="font-weight-bold">PETSHOP UNPAK BOGOR</h3>
        <h5>Ciheuleut, Bogor Tengah, Bogor
          <br>Buka Jam <strong>08:00 - 20:00</strong>
        </h5>
      </div>
      <div class="row link-menu mb-5 mt-5 justify-content-center">
        <div class="col-md-3 col-sm-6 col-6 mb-4 d-flex justify-content-center">
          <div class="card bg-dark p-3 text-white border-light overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
            <div class="overlay text-center">
              <img src="images/Home_Petshop/box.png" class="card-img mb-4" width="200" alt="Lihat Daftar Menu">
              <a href="menu_pembeli.php" class="btn btn-danger">LIHAT PRODUK</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6 mb-4 d-flex justify-content-center">
          <div class="card bg-dark p-3 text-white border-light overflow-hidden d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="overlay text-center">
              <img mb-2 src="images/Home_Petshop/order.png" width="200" class="card-img mb-4" alt="Lihat Pesanan">
              <a href="pesanan_pembeli.php" class="btn btn-danger">LIHAT KERANJANG</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Menu -->

    <!-- Keterangan -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffd700" fill-opacity="1" d="M0,192L34.3,186.7C68.6,181,137,171,206,176C274.3,181,343,203,411,181.3C480,160,549,96,617,85.3C685.7,75,754,117,823,160C891.4,203,960,245,1029,224C1097.1,203,1166,117,1234,112C1302.9,107,1371,181,1406,218.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <section class="keterangan">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-duration="2000">
            <img src="images/Home_Petshop/cat_home.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">
            <div class="row">
              <img src="images/Home_Petshop/dog_mini.png" alt="" class="img-fluid">
              <h2 class="font-weight-bold">ONE STOP Pet Supplies & Services</h2>
              <p>Kami menyediakan semua jasa dan produk kebutuhan hewan peliharaan yang Anda butuhkan. Tidak usah repot dan pusing lagi, karena segala permasalahan Anda akan kami bantu berikan SOLUSI yang tepat. Jasa yang mempermudah dan mengatasi segala permasalahan hewan & Anda. Produk dengan pilihan dan kualitas baik yang cocok untuk hewan peliharaan Anda.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" style="background-color: #ffd700;" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,96L34.3,112C68.6,128,137,160,206,181.3C274.3,203,343,213,411,181.3C480,149,549,75,617,80C685.7,85,754,171,823,218.7C891.4,267,960,277,1029,240C1097.1,203,1166,117,1234,112C1302.9,107,1371,181,1406,218.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <!-- Akhir Keterangan -->

    <!-- Services -->
    <section class="services py-5">
      <div class="container">
        <h3 class="text-center text-uppercase mb-5 font-weight-bold">Services</h3>
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-4">
            <a href="dog&cat_training.html">
              <div class="card text-center p-4">
                <div class="header">
                  <img src="images/Home_Petshop/medal.png" width="90" alt="Medal">
                </div>
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">Dog & Cat Training</h5>
                  <p class="card-text">(Pelatihan Anjing & Kucing)</p>
                </div>
              </div>
          </div>
          </a>
          <div class="col-lg-3 col-sm-6 mb-4">
            <a href="pet_gromming.html">
              <div class="card text-center p-4">
                <div class="header">
                  <img src="images/Home_Petshop/Pet-grooming.png" width="90" alt="Medal">
                </div>
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">Pet Grooming</h5>
                  <p class="card-text">(Mandi Hewan)</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 mb-4">
            <a href="pet_care.html">
              <div class="card text-center p-4">
                <div class="header">
                  <img src="images/Home_Petshop/Pet-Care.png" width="90" alt="Medal">
                </div>
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">Pet Care</h5>
                  <p class="card-text">(Perawatan Hewan)</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 mb-4">
            <a href="home_cleaning.html">
              <div class="card text-center p-4">
                <div class="header">
                  <img src="images/Home_Petshop/Home-Cleaning.png" width="90" alt="Medal">
                </div>
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">Home Cleaning</h5>
                  <p class="card-text">(Pembersihan Lingkungan Hewan)</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Services -->

    <!-- Large Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffd700" fill-opacity="1" d="M0,224L34.3,197.3C68.6,171,137,117,206,101.3C274.3,85,343,107,411,106.7C480,107,549,85,617,96C685.7,107,754,149,823,170.7C891.4,192,960,192,1029,176C1097.1,160,1166,128,1234,117.3C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
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

    <!-- Aos on Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Init Aos -->
    <script>
      AOS.init();
    </script>
  </body>

  </html>
<?php } ?>