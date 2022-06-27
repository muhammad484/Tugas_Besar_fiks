<?php 
  session_start();
  require 'fungsi.php';
  $mhs = profil("SELECT * FROM tb_mahasiswa");
  $result_nilai1 = nilai("SELECT * FROM tb_matkul WHERE semester = 2");
  $result_nilai3 = nilai("SELECT * FROM tb_matkul WHERE semester = 4");
  $result_nilai5 = nilai("SELECT * FROM tb_matkul WHERE semester = 6");
  $result_nilai7 = nilai("SELECT * FROM tb_matkul WHERE semester = 8");
  if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Home</title>
  </head>
  <body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <span class="navbar-brand h1" style="margin-right: 55rem;">Kelompok 2</span>
          <ul class="nav nav-pills justify-content-end">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="admin.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">About Us</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="data/Robiatul_Adawiyah.php">Robiatul Adawiyah</a></li>
                <li><a class="dropdown-item" href="data/Karisma.php">Karisma Sekar Arum</a></li>
                <li><a class="dropdown-item" href="data/Fito.php">Anandhari Alfitho Dealova</a></li>
                <li><a class="dropdown-item" href="#">Muhammad Akbar Maulana</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1>Informasi Mata Kuliah</h1>
        </div>
      </div>
    </div>
    <table class="table table-bordered" style="margin-top: 5rem;">
      <tr>
        <td colspan="6" class="align-middle">
          <h2 align="center">Semester 2</h2>
        </td>
        <td rowspan="25">
          <div class="card ms-auto" style="width: 18rem; align-items: center;">
            <img src="account.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?= $mhs["nama_mahasiswa"] ?></h5>
              <h5 class="card-title" style="margin-bottom: 20px;"><?= $mhs["username"] ?></h5>
              <a href="profile.php" class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto">Profile</a>
              <hr>
              <a href="informasi_mata_kuliah.php" class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto">Informasi Mata Kuliah</a>
              <hr>
              <a href="krs.php" class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto">Kartu Rencana Studi</a>
              <hr>
              <a href="khs.php" class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto">Kartu Hasil Studi</a>
              <hr>
              <a href="transkip.php" class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto">Transkip Nilai</a>
              <hr>
              <a href="judul_tugas_ahir.php" class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto">Judul Tugas Akhir</a>
              <hr>
              <a href="ubah_password.php" class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto">Ubah Password</a>
              <hr>
            </div>
          </div>
        </td>
      </tr>
      <tr  align="center">
        <td>Kode</td>
        <td>Mata Kuliah</td>
        <td>Nama Dosen</td>
        <td>Kelas</td>
      </tr>
      <?php foreach ($result_nilai1 as $nilai) :?>
        <tr>
          <td><?php echo $nilai['kode']; ?></td>
          <td><?php echo $nilai['matkul']; ?></td>
          <td><?php echo $nilai['nama_dosen']; ?></td>
          <td align="center"><?php echo $nilai['kelas']; ?></td>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td colspan="5" class="align-middle">
          <h2 align="center">Semester 4</h2>
        </td>
      </tr>
      <tr align="center">
        <td>Kode</td>
        <td>Mata Kuliah</td>
        <td>Nama Dosen</td>
        <td>Kelas</td>
      </tr>
      <?php foreach ($result_nilai3 as $nilai) :?>
        <tr>
          <td><?php echo $nilai['kode']; ?></td>
          <td><?php echo $nilai['matkul']; ?></td>
          <td><?php echo $nilai['nama_dosen']; ?></td>
          <td align="center"><?php echo $nilai['kelas']; ?></td>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td colspan="5" class="align-middle">
          <h2 align="center">Semester 6</h2>
        </td>
      </tr>
      <tr align="center">
        <td>Kode</td>
        <td>Mata Kuliah</td>
        <td>Nama Dosen</td>
        <td>Kelas</td>
      </tr>
      <?php foreach ($result_nilai5 as $nilai) :?>
        <tr>
          <td><?php echo $nilai['kode']; ?></td>
          <td><?php echo $nilai['matkul']; ?></td>
          <td><?php echo $nilai['nama_dosen']; ?></td>
          <td align="center"><?php echo $nilai['kelas']; ?></td>
        </tr>
      <?php endforeach; ?>
      <tr align="center">
        <td colspan="5" class="align-middle">
          <h2 align="center">Semester 8</h2>
        </td>
      </tr>
      <tr align="center">
        <td>Kode</td>
        <td>Mata Kuliah</td>
        <td>Nama Dosen</td>
        <td>Kelas</td>
      </tr>
      <?php foreach ($result_nilai7 as $nilai) :?>
        <tr>
          <td><?php echo $nilai['kode']; ?></td>
          <td><?php echo $nilai['matkul']; ?></td>
          <td><?php echo $nilai['nama_dosen']; ?></td>
          <td align="center"><?php echo $nilai['kelas']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>


    <nav class="navbar navbar-dark bg-dark text-center">
      <div class="container-fluid"> 
        <p class="navbar-brand" style="font-size: 12px; margin-left: 35%; margin-top: 10px;">Portal Akademik Universitas Negeri Konoha
        © 2022. All Right Reserved</p>
      </div>
    </nav>      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  </body>
</html>