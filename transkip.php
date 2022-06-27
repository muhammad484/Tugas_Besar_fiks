<?php 
  session_start();
  require 'fungsi.php';
  $mhs = profil("SELECT * FROM tb_mahasiswa");
  $result_nilai = nilai("SELECT * FROM tb_khs WHERE semester = 1");
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

    <title>Transkip</title>
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
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
    </nav>
<div class="container">
      <div class="row">
        <div class="col text-center">
          <h1>Transkip Nilai</h1>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top: 30px;">
      <div class="row">
        <div class="col-9">
          <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h5>Keterangan :</h5>
                <p>Transkrip Nilai berisi informasi nilai hasil studi mahasiswa mulai dari semester awal sampai dengan semester terakhir mahasiswa. Transkrip ini dapat dicetak dalam bentuk transkrip satu halaman.</p>
                <br>
                <div class="card-header">
                  Nama : <?= $mhs["nama_mahasiswa"] ?>
                </div>
                <div class="card-header">
                  NIM : <?= $mhs["username"] ?>
                </div>
                <div class="card-header">
                  Prodi : <?= $mhs["prodi"] ?>
                </div>
                <div class="card-header">
                  Semester : <?= $mhs["semester"] ?>
                </div><br><br>  
                <table class="table table-bordered">
                  <tr class="text-center">
                    <td>Kode</td>
                    <td>Mata Kuliah</td>
                    <td>Kelas</td>
                    <td>SKS</td>
                    <td>Nilai</td>
                    <td>Angka</td>
                  </tr>
                  <?php foreach ($result_nilai as $nilai) :?>
                  <tr>
                    <td><?php echo $nilai['kode']; ?></td>
                    <td><?php echo $nilai['matkul']; ?></td>
                    <td><?php echo $nilai['kelas']; ?></td>
                    <td align="center"><?php echo $nilai['sks']; ?></td>
                    <td align="center"><?php echo $nilai['nilai']; ?></td>
                    <td align="center"><?php echo $nilai['nilai']; ?></td>
                  </tr>
                <?php endforeach ; ?>
                </table>
                <table class="table table-borderless table-sm" style="width: 20rem;">
                  <tr>
                    <td>Jumlah SKS Diambil</td>
                    <td> : 
                      <?php $total = 0; $no = 0;?>
                      <?php foreach ($result_nilai as $nilai) :?>
                        <?php 
                          $total = $total + $nilai['sks'];
                          $no ++
                         ?>
                      <?php endforeach ; ?>
                      <?php echo $total; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Jumlah Mata Kuliah Diambil</td>
                    <td> : <?php echo $no; ?></td>
                  </tr>
                  <tr>
                    <td>IP Semester</td>
                    <td> :
                      <?php $total = 0;?>
                      <?php foreach ($result_nilai as $nilai) :?>
                        <?php 
                          $total = $total + $nilai['angka'];
                         ?>
                      <?php endforeach ; ?>
                      <?php echo $total; ?>
                    </td>
                  </tr>
                  <tr>
                    <th colspan="2">Keterangan</th>
                  </tr>
                  <tr>
                    <td>A</td>
                    <td>: 4.00</td>
                  </tr>
                  <tr>
                    <td>B+</td>
                    <td>: 3.50</td>
                  </tr>
                  <tr>
                    <td>B</td>
                    <td>: 3.00</td>
                  </tr>
                  <tr>
                    <td>C+</td>
                    <td>: 2.50</td>
                  </tr>
                  <tr>
                    <td>C</td>
                    <td>: 2.00</td>
                  </tr>
                  <tr>
                    <td>D</td>
                    <td>: 1.00</td>
                  </tr>
                  <tr>
                    <td>D+</td>
                    <td>: 1.50</td>
                  </tr>
                  <tr>
                    <td>E</td>
                    <td>: 0.00</td>
                  </tr>
                </table>
                <a class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto" href="print_transkip.php" role="button">Print</a>
              </div>
            </div>
          </div>
          <div class="col-3">
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
          </div>
      </div>
    </div>
    

    <br>
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