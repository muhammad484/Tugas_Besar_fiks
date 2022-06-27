<?php 
  session_start();
  require 'fungsi.php';
  $mhs = profil("SELECT * FROM tb_mahasiswa");
  if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
  }
  // else{
  //   header("location:admin.php");
  //   exit();
  // }  
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
                <li><a class="dropdown-item" href="data/Fito.php">Anandhari Alfitho Deanova</a></li>
                <li><a class="dropdown-item" href="#">Muhammad Akbar Maulana</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" name="logout">Logout</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col text-center" style="margin: 10px 0;">
          <h2>Portal Akademik | Universitas Negeri Konoha</h2>
        </div>
      </div>
    </div>
    <table class="table table-sm" style="margin-top: 15px;">
      <tr>
        <td>
          <div class="card" style="width: 30rem;">
            <div class="card-header">
              <h5 class="card-title">Selamat Datang <?= $mhs["nama_mahasiswa"] ?></h5>
            </div>
            <div class="card-body">
              <br>
              <p class="card-text">Selamat Datang di Portal Akademik. Portal Akademik adalah sistem yang memungkinkan para civitas akademika Universitas Trunojoyo Madura untuk menerima informasi dengan lebih cepat melalui Internet. Sistem ini diharapkan dapat memberi kemudahan setiap civitas akademika untuk melakukan aktivitas-aktivitas akademik dan proses belajar mengajar. Selamat menggunakan fasilitas ini.</p>
            </div>
          </div>
        </td>
        <td>
          <div class="card" style="width: 30rem; margin-left: 10px;">
            <div class="card-header">
              <h5 class="card-title text-center">Pesan</h5>
            </div>
            <div class="card-body">
              <br>
              <p class="card-text">Anda Memiliki 0 pesan</p>
              <button type="button" class="btn btn-primary">Masuk</button>
              <button type="button" class="btn btn-primary">Terkirim</button>
            </div>
          </div>
        </td>
        <td rowspan="2">
          <div class="card ms-auto" style="width: 18rem;">
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
      <tr>
        <td>
          <div class="card" style="width: 25rem; margin-top: 10px;">
            <div class="card-header">
              <h5 class="card-title text-center">Pengumuman</h5>
            </div>
            <div class="card-body">
              <div class="card" style="width: 22rem;">
                <div class="card-header">
                  <a href="">Kategori : Informasi Akademik</a>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Belum ada informasi untuk kategori ini</li>
                </ul>
              </div><br>
              <div class="card" style="width: 22rem;">
                <div class="card-header">
                  <a href="">Kategori : Kegiatan Mahasiswa</a>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Belum ada informasi untuk kategori ini</li>
                </ul>
              </div><br>
              <div class="card" style="width: 22rem;">
                <div class="card-header">
                  <a href="">Kategori : Seputar Registrasi</a>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Belum ada informasi untuk kategori ini</li>
                </ul>
              </div>
            </div>
          </div>
        </td>
        <td>
          <div class="card" style="width: 25rem; margin-top: 10px;">
            <div class="card-header">
              <h5 class="card-title text-center">Diskusi Terbaru</h5>
            </div>
            <div class="card-body">
              <div class="card" style="width: 22rem;">
                <div class="card-header">
                  <a href="">[Kritik & Saran Portal Akademik UNIK]</a>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Tidak bisa membuka portal transkip nilai</li>
                </ul>
              </div><br>
              <div class="card" style="width: 22rem;">
                <div class="card-header">
                  <a href="">[Kritik & Saran Portal Akademik UNIK]</a>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Transkip nilai tidak bisa dibuka</li>
                </ul>
              </div><br>
              <div class="card" style="width: 22rem;">
                <div class="card-header">
                  <a href="">[Kritik & Saran Portal Akademik UNIK]</a>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Registrasi tidak masuk</li>
                </ul>
              </div><br>
              <div class="card" style="width: 22rem;">
                <div class="card-header">
                  <a href="">[Kritik & Saran Portal Akademik UNIK]</a>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">KRS</li>
                </ul>
              </div><br>
            </div>
          </div>
        </td>
      </tr>
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