<?php 
  session_start();
  require 'fungsi.php';
  if (isset($_POST['submit'])) {
    $semester = $_POST['semester'];
    $result_nilai = nilai("SELECT * FROM tb_khs WHERE semester = '$semester'");
    $mhs = profil("SELECT * FROM tb_mahasiswa");
  }
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

    <title>Kartu Hasil Studi</title>
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
          <h1>Kartu Hasil Studi</h1>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top: 30px;">
      <div class="row">
        <div class="col-9">
          <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h5>Keterangan :</h5>
                <p>Kartu Hasil Studi merupakan fasilitas yang dapat digunakan untuk melihat hasil studi mahasiswa persemester. Selain dapat dilihat secara online, hasil studi ini juga dapat dicetak.</p>
                <div class="card-header hstack gap-3">
                  <h6>Semester</h6>
                  <form method="post" action="">
                    <select class="form-select form-select-sm " aria-label=".form-select-sm example" style="width: 250px; margin-left: 20px; float: left;" name="semester">
                      <option value="2">Gasal 2020/2021</option>
                      <option value="4">Genap 2020/2021</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm" name="submit" style="float: right; margin-left: 15px;">Lihat</button>
                  </form>
                </div><br>
                <table class="table table-borderless">
                  <tr class="table-active">
                    <td>Nama</td>
                    <td>: <?= $mhs["nama_mahasiswa"] ?></td>
                  </tr>
                  <tr>
                    <td>NIM</td>
                    <td>: <?= $mhs["username"] ?></td>
                  </tr>
                  <tr class="table-active">
                    <td>Prodi</td>
                    <td>: <?= $mhs["prodi"] ?></td>
                  </tr>
                  <tr>
                    <td>Semester</td>
                    <td>: <?= $mhs["semester"] ?></td>
                  </tr>
                </table>
                <br><br>
                <table class="table table-bordered">
                  <tr class="text-center">
                    <td>Kode</td>
                    <td>Mata Kuliah</td>
                    <td>Kelompok</td>
                    <td>SKS</td>
                    <td>Nilai</td>
                  </tr>
                  <?php foreach ($result_nilai as $nilai) :?>
                  <tr>
                    <td align="center"><?php echo $nilai['kode']; ?></td>
                    <td><?php echo $nilai['matkul']; ?></td>
                    <td align="center"><?php echo $nilai['kelompok']; ?></td>
                    <td align="center"><?php echo $nilai['sks']; ?></td>
                    <td align="center"><?php echo $nilai['nilai']; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </table>
                <table class="table table-borderless" style="width: 20rem;">
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
                </table>
                <a class="btn btn-primary btn-sm d-grid gap-2 col-6 mx-auto" href="print_khs.php" role="button">Print</a>
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
    
    <!-- footer -->
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