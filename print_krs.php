<?php 
  session_start();
  require 'fungsi.php';
  $mhs = profil("SELECT * FROM tb_mahasiswa");
  $hasil = krs("SELECT * FROM tb_krs");
  if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body style="font-family: arial;">
      <img src="https://cf.shopee.co.id/file/8c0e30e992e002b8e3ea6537b055d0ab_tn" class="rounded-circle" style="width: 60px;margin: 50px 10px 0 20px;float: left;">
      <h4 style=" padding-top: 50px;">Universitas Negeri Konoha</h4>
      <h6 style="position: relative;">Fakultas Sastra Mesin</h6>
    <div class="container text-center">
      <h5>KARTU HASIL STUDI</h5>
      <h6>Semester: Gasal 2021/2022</h6><br>
    </div>
    <table class="table table-borderless table-sm" style="margin-left: 20px;font-size: 12px;">
      <tr>
        <td style="width: 15rem;">Nama Mahasiswa</td>
        <td>: <?= $mhs["nama_mahasiswa"] ?></td>
      </tr>
      <tr>
        <td>Nomor Induk Mahasiswa</td>
        <td>: <?= $mhs["username"] ?></td>
      </tr>
      <tr>
        <td>Angkatan</td>
        <td>: <?= $mhs["tahun_masuk"] ?></td>
      </tr>
      <tr>
        <td>Program Studi</td>
        <td>: <?= $mhs["prodi"] ?></td>
      </tr>
      <tr>
        <td>Pembimbing Akademik</td>
        <td>: <?= $mhs["nama_dosen"] ?></td>
      </tr>
    </table>
    <table class="table table-bordered table-sm table-striped" style="font-size: 12px;margin-left: 20px; margin-right: 20px; width: 70rem;">
      <tr class="text-center">
        <td style="width: 3rem;">Kode</td>
        <td style="width: 12rem;">Mata Kuliah</td>
        <td style="width: 3rem;">Nama Dosen</td>
        <td style="width: 3rem;">Kelas</td>
        <td style="width: 3rem;">SKS</td>
      </tr>
      <?php foreach ($hasil as $nilai) :?>
      <tr>
        <td class="text-center"><?php echo $nilai['kode']; ?></td>
        <td><?php echo $nilai['matkul']; ?></td>
        <td><?php echo $nilai['nama_dosen']; ?></td>
        <td align="center"><?php echo $nilai['kelas']; ?></td>
        <td align="center"><?php echo $nilai['sks']; ?></td>
      </tr>
      <?php endforeach ; ?>
    </table>
    <table class="table table-borderless table-sm" style="width: 20rem; margin-left: 20px;font-size: 12px;">
      <tr>
        <td>Jumlah SKS Diambil</td>
        <td> : 
          <?php $total = 0; $no = 0;?>
          <?php foreach ($hasil as $nilai) :?>
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
    </table>
    <table class="table table-borderless table-sm" style="width: 20rem; margin-left: 20px;font-size: 12px;">
      
    </table>

    <script type="text/javascript">
      window.print();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>