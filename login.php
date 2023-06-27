<?php
include 'koneksi.php';
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/login.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->

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

    body {
      background-image: url(images/Background-Petshop/bg_login.jpeg);
      background-size: cover;
    }

    .row {
      height: 100vh;
    }

    form {
      background-color: rgba(255, 255, 255, .3);
      backdrop-filter: blur(7px);
      box-shadow: 0 3px 20px rgba(0, 0, 0, 0.4);
      padding: 40px;
      border-radius: 10px;
    }

    button {
      width: 49%;
    }

    form .btn {
      transition: .3s all;
    }

    form .btn:hover {
      background-color: #ffd700;
      color: #1f1f1f;
    }

    @media (max-width: 576px) {
      form {
        width: 90%;
      }
    }

    @media (max-width: 768px) {
      form {
        width: 90%;
      }
    }
  </style>

  <title>Petshop Unpak Bogor Login</title>
</head>

<body>
  <!-- Form Login -->
  <div class="row p-4 d-flex justify-content-center align-items-center">
    <div class="col-lg-4">
      <form method="POST" action="">
        <div class="rows text-center">
          <img src="images/Home_Petshop/logo-removebg-preview.png" class="mb-3" width="80" alt="Logo">
        </div>
        <h4 class="text-center font-weight-bold">LOGIN</h4>
        <hr>
        <div class="form-group">
          <label for="exampleInputEmail1" class="font-weight-bold">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" class="form-control" placeholder="Masukkan Username" name="username" required>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="font-weight-bold">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
            </div>
            <input type="password" class="form-control" placeholder="Masukkan Password" name="password" required>
          </div>
        </div>
        <div class="mb-3">
          <small><a href="register.php" class="text-dark">Belum Punya Akun ? Buat Akun Anda !</a></small>
        </div>
        <button type="submit" name="submit" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> LOGIN</button>
        <button type="reset" name="reset" class="btn btn-danger"><i class="fa-solid fa-arrows-rotate"></i> RESET</button>
      </form>
    </div>
  </div>
  <!-- Akhir Form Login -->

  <!-- Eksekusi Form Login -->
  <?php
  if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memilih tabel
    $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
    $hasil = mysqli_fetch_array($cek_data);
    $status = $hasil['status'];
    $login_user = $hasil['username'];
    $row = mysqli_num_rows($cek_data);

    // Pengecekan Kondisi Login Berhasil/Tidak
    if ($row > 0) {
      session_start();
      $_SESSION['login_user'] = $login_user;

      if ($status == 'admin') {
        echo "<script>alert('Login Berhasil');</script>";
        echo "<script>location= 'admin.php'</script>";
      } elseif ($status == 'user') {
        echo "<script>alert('Login Berhasil');</script>";
        echo "<script>location= 'user.php'</script>";
      }
    } else {
      echo "<script>alert('Username atau Password salah!');</script>";
      echo "<script>location= 'login.php'</script>";
    }
  }
  ?>
  <!-- Akhir Eksekusi Form Login -->

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