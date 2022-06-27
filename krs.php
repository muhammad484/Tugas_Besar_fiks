<?php 
  session_start();
  require 'fungsi.php';
  $mhs = profil("SELECT * FROM tb_mahasiswa");
  $krs1 = krs('SELECT * FROM tb_matkul WHERE semester = 2');
  $krs3 = krs('SELECT * FROM tb_matkul WHERE semester = 4');
  $krs5 = krs('SELECT * FROM tb_matkul WHERE semester = 6');
  $krs7 = krs('SELECT * FROM tb_matkul WHERE semester = 8');
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
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1>Kartu Rencana Studi</h1>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top: 30px;">
      <div class="row">
        <div class="col-9">
          <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Semester 2
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <table class="table table-bordered">
                        <tr class="text-center">
                          <td colspan="2">Kode</td>
                          <td>Mata Kuliah</td>
                          <td>Nama Dosen</td>
                          <td>Kelas</td>
                          <td>SKS</td>
                        </tr>
                        <form action="cetak.php" method="post">
                        <?php foreach ($krs1 as $nilai) :?>
                        <tr>
                          <input type="hidden" name="nama_mhs" value="<?= $mhs["nama_mahasiswa"] ?>">
                          <input type="hidden" name="prodi" value="<?= $mhs["prodi"] ?>">
                          <input type="hidden" name="fakultas" value="<?= $mhs["fakultas"] ?>">
                          <input type="hidden" name="semester" value="<?= $mhs["semester"] ?>">
                          <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="<?= $nilai["kode"];?>" name="ns[]"></td>
                          <td><input type="hidden" name="kode[]" value="<?= $nilai["kode"];?>"><?php echo $nilai['kode']; ?></td>
                          <td><input type="hidden" name="matkul[]" value="<?= $nilai["matkul"];?>"><?php echo $nilai['matkul']; ?></td>
                          <td><input type="hidden" name="nama_dosen[]" value="<?= $nilai["nama_dosen"];?>"><?php echo $nilai['nama_dosen']; ?></td>
                          <td><input type="hidden" name="kelas[]" value="<?= $nilai["kelas"];?>"><?php echo $nilai['kelas']; ?></td>
                          <td align="center"><input type="hidden" name="sks[]" value="<?= $nilai["sks"];?>"><?php echo $nilai['sks']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </table>
                      <button type="submit" class="btn btn-primary" name="submit">Cetak</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Semester 4
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <table class="table table-bordered">
                        <tr class="text-center">
                          <td colspan="2">Kode</td>
                          <td>Mata Kuliah</td>
                          <td>Nama Dosen</td>
                          <td>Kelas</td>
                          <td>SKS</td>
                        </tr>
                        <form action="cetak.php" method="post">
                        <?php foreach ($krs3 as $nilai) :?>
                        <tr>
                          <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="<?= $nilai["kode"];?>" name="ns[]"></td>
                          <td><input type="hidden" name="kode[]" value="<?= $nilai["kode"];?>"><?php echo $nilai['kode']; ?></td>
                          <td><input type="hidden" name="matkul[]" value="<?= $nilai["matkul"];?>"><?php echo $nilai['matkul']; ?></td>
                          <td><input type="hidden" name="nama_dosen[]" value="<?= $nilai["nama_dosen"];?>"><?php echo $nilai['nama_dosen']; ?></td>
                          <td><input type="hidden" name="kelas[]" value="<?= $nilai["kelas"];?>"><?php echo $nilai['kelas']; ?></td>
                          <td align="center"><input type="hidden" name="sks[]" value="<?= $nilai["sks"];?>"><?php echo $nilai['sks']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </table>
                      <button type="submit" class="btn btn-primary" name="submit">Cetak</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Semester 6
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <table class="table table-bordered">
                        <tr class="text-center">
                          <td colspan="2">Kode</td>
                          <td>Mata Kuliah</td>
                          <td>Nama Dosen</td>
                          <td>Kelas</td>
                          <td>SKS</td>
                        </tr>
                        <form action="cetak.php" method="post">
                        <?php foreach ($krs5 as $nilai) :?>
                        <tr>
                          <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="<?= $nilai["kode"];?>" name="ns[]"></td>
                          <td><input type="hidden" name="kode[]" value="<?= $nilai["kode"];?>"><?php echo $nilai['kode']; ?></td>
                          <td><input type="hidden" name="matkul[]" value="<?= $nilai["matkul"];?>"><?php echo $nilai['matkul']; ?></td>
                          <td><input type="hidden" name="nama_dosen[]" value="<?= $nilai["nama_dosen"];?>"><?php echo $nilai['nama_dosen']; ?></td>
                          <td><input type="hidden" name="kelas[]" value="<?= $nilai["kelas"];?>"><?php echo $nilai['kelas']; ?></td>
                          <td align="center"><input type="hidden" name="sks[]" value="<?= $nilai["sks"];?>"><?php echo $nilai['sks']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </table>
                      <button type="submit" class="btn btn-primary" name="submit">Cetak</button>
                      </form>
                    </div>
                  </div>
                </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                      Semester 8
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <table class="table table-bordered">
                        <tr class="text-center">
                          <td colspan="2">Kode</td>
                          <td>Mata Kuliah</td>
                          <td>Nama Dosen</td>
                          <td>Kelas</td>
                          <td>SKS</td>
                        </tr>
                        <form action="cetak.php" method="post">
                        <?php foreach ($krs7 as $nilai) :?>
                        <tr>
                          <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="<?= $nilai["kode"];?>" name="ns[]"></td>
                          <td><input type="hidden" name="kode[]" value="<?= $nilai["kode"];?>"><?php echo $nilai['kode']; ?></td>
                          <td><input type="hidden" name="matkul[]" value="<?= $nilai["matkul"];?>"><?php echo $nilai['matkul']; ?></td>
                          <td><input type="hidden" name="nama_dosen[]" value="<?= $nilai["nama_dosen"];?>"><?php echo $nilai['nama_dosen']; ?></td>
                          <td><input type="hidden" name="kelas[]" value="<?= $nilai["kelas"];?>"><?php echo $nilai['kelas']; ?></td>
                          <td align="center"><input type="hidden" name="sks[]" value="<?= $nilai["sks"];?>"><?php echo $nilai['sks']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </table>
                      <button type="submit" class="btn btn-primary" name="submit">Cetak</button>
                      </form>
                  </div>
                </div>
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
    <nav class="navbar navbar-dark bg-dark text-center" style="margin-top: 20px;">
      <div class="container-fluid"> 
        <p class="navbar-brand" style="font-size: 12px; margin-left: 35%; margin-top: 20px;">Portal Akademik Universitas Negeri Konoha
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