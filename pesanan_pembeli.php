<?php
include('koneksi.php');
session_start();
if (!isset($_SESSION['login_user'])) {
  header("location: login.php");
} else {
?>
  <?php
  if (empty($_SESSION["pesanan"]) or !isset($_SESSION["pesanan"])) {
    echo "<script>alert('Pesanan kosong, Silahkan Pesan Terlebih dahulu');</script>";
    echo "<script>location= 'menu_pembeli.php'</script>";
  }
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
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

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

      .navbar .dropdown .btn {
        color: white;
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

      /* Pesanan Pembeli */
      .pesanan-pembeli .container {
        background-color: #edecec;
        border-radius: 10px;
      }

      .pesanan-pembeli .btn {
        transition: .3s all;
      }

      .pesanan-pembeli .btn:hover {
        background-color: #ffd700;
        color: #1f1f1f;
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

      /* Media Query */
      @media (max-width: 576px) {

        /* Navbar */
        .navbar .text {
          display: none;
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

    <title>Petshop Unpak Bogor Keranjang</title>
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
              <a class="nav-link ml-3" style="color: #ffd700;" href="pesanan_pembeli.php"><i class="bi bi-cart-fill"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-3" href="logout.php"><i class="bi bi-box-arrow-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" class="wave" style="background-color: #ffd700;" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,128L34.3,138.7C68.6,149,137,171,206,160C274.3,149,343,107,411,101.3C480,96,549,128,617,138.7C685.7,149,754,139,823,149.3C891.4,160,960,192,1029,197.3C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <!-- Akhir Navbar -->

    <!-- Menu -->
    <section class="pesanan-pembeli">
      <div class="container p-4">
        <div class="judul-pesanan">
          <h3 class="text-center font-weight-bold">KERANJANG PESANAN</h3>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="example">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pesanan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Subharga</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody class="bg-light">
              <?php $nomor = 1; ?>
              <?php $totalbelanja = 0; ?>
              <?php foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) : ?>

                <?php
                include('koneksi.php');
                $ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
                $pecah = $ambil->fetch_assoc();
                $subharga = $pecah["harga"] * $jumlah;
                ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah["nama_menu"]; ?></td>
                  <td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
                  <td><?php echo $jumlah; ?></td>
                  <td>Rp. <?php echo number_format($subharga); ?></td>
                  <td>
                    <a href="hapus_pesanan.php?id_menu=<?php echo $id_menu ?>" onclick="return confirm('Anda Yakin Ingin Membatalkan Pesanan?');" class="badge badge-danger"><i class="fa-solid fa-xmark"></i> Batalkan</a>
                  </td>
                </tr>
                <?php $nomor++; ?>
                <?php $totalbelanja += $subharga; ?>
              <?php endforeach ?>
            </tbody>
            <tfoot class="bg-light">
              <tr>
                <th colspan="4">Total Belanja</th>
                <th colspan="2">Rp. <?php echo number_format($totalbelanja) ?></th>
              </tr>
            </tfoot>
          </table><br>
        </div>

        <form method="POST" action="" class="mt-4">
          <a href="menu_pembeli.php" class="btn btn-primary btn-sm"><i class="bi bi-bag-fill"></i> Lihat Product</a>
          <button class="btn btn-success btn-sm" name="konfirm"><i class="bi bi-check-circle-fill"></i> Konfirmasi Pesanan</button>
        </form>

        <?php
        if (isset($_POST['konfirm'])) {
          $tanggal_pemesanan = date("Y-m-d");

          // Menyimpan data ke tabel pemesanan
          $insert = mysqli_query($koneksi, "INSERT INTO pemesanan (tanggal_pemesanan, total_belanja) VALUES ('$tanggal_pemesanan', '$totalbelanja')");

          // Mendapatkan ID barusan
          $id_terbaru = $koneksi->insert_id;

          // Menyimpan data ke tabel pemesanan produk
          foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) {
            $insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_pemesanan, id_menu, jumlah) 
              VALUES ('$id_terbaru', '$id_menu', '$jumlah') ");
          }

          // Mengosongkan pesanan
          unset($_SESSION["pesanan"]);

          // Dialihkan ke halaman nota
          echo "<script>alert('Pemesanan Sukses!');</script>";
          echo "<script>location= 'menu_pembeli.php'</script>";
        }
        ?>
      </div>
    </section>

    <!-- Akhir Menu -->

    <!-- Large Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffd700" fill-opacity="1" d="M0,96L34.3,122.7C68.6,149,137,203,206,213.3C274.3,224,343,192,411,197.3C480,203,549,245,617,224C685.7,203,754,117,823,101.3C891.4,85,960,139,1029,144C1097.1,149,1166,107,1234,101.3C1302.9,96,1371,128,1406,144L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/4752e5dd73.js" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </script>
  </body>

  </html>
<?php } ?>