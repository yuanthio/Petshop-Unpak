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

  <!-- Icon Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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

    body {
      background-image: url(images/Background-Petshop/bg_register.jpeg);
      background-size: cover;
    }

    .card {
      background-color: rgba(255, 255, 255, .3);
      backdrop-filter: blur(7px);
      box-shadow: 0 3px 20px rgba(0, 0, 0, 0.4);
      padding: 20px;
      border-radius: 10px;
    }

    form .btn {
      transition: .3s all;
    }

    form .btn:hover {
      background-color: #ffd700;
      color: #1f1f1f;
    }
  </style>

  <title>Petshop Unpak Bogor Registrasi</title>
</head>

<body>

  <!-- Form Registrasi -->
  <div class="container">
    <div class="card p-5 my-5 animate__animated animate__bounceInUp">
      <h3 class="text-center mb-5 font-weight-bold">REGISTRASI</h3>
      <hr>
      <form method="POST" action="simpan_register.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="user" class="font-weight-bold">Username</label>
            <input type="text" class="form-control" id="user" name="username" placeholder="Masukan Username" required>
          </div>
          <div class="form-group col-md-6">
            <label for="pass" class="font-weight-bold">Password</label>
            <input type="password" class="form-control" id="pass" name="password" placeholder="Masukan Password" required>
          </div>
        </div>
        <div class="form-group">
          <label for="nama" class="font-weight-bold">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
        </div>
        <div class="form-group" required>
          <label for="jk" class="font-weight-bold">Jenis Kelamin</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki">
            <label class="form-check-label" for="jk">Laki-Laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Perempuan">
            <label class="form-check-label" for="jk">Perempuan</label>
          </div>
        </div>
        <div class="form-group">
          <label for="tgl" class="font-weight-bold">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tgl" name="tanggal_lahir" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="rumah" class="font-weight-bold">Alamat</label>
            <input type="text" class="form-control" id="rumah" name="alamat" placeholder="Masukan Alamat" required>
          </div>
          <div class="form-group col-md-2">
            <label for="telp" class="font-weight-bold">No. Telephone</label>
            <input type="text" class="form-control" id="telp" name="hp" placeholder="No. Telephone" required>
          </div>
          <div class="form-group col-md-4">
            <label for="sts" class="font-weight-bold">Status Registrasi</label>
            <select id="sts" class="form-control" name="status" required>
              <option selected>Pilih...</option>
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
          </div>
        </div>
        <button type="register" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Register</button>
        <button type="reset" class="btn btn-danger"><i class="fa-solid fa-arrows-rotate"></i> Reset</button>
        <a type="submit" href="login.php" class="btn btn-success"><i class="bi bi-backspace-fill"></i> Kembali</a>
      </form>
    </div>
  </div>
  <!-- Akhir Form Registrasi -->

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