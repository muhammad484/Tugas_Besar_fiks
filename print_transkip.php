<?php 
  session_start();
  require 'fungsi.php';
  $mhs = profil("SELECT * FROM tb_mahasiswa");
  $result_nilai = nilai("SELECT * FROM tb_khs WHERE semester = 2");
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
      <h5>TRANSKIP AKADENIK</h5><hr>
      <h6>Sementara</h6><br>
    </div>
    <table class="table table-borderless table-sm" style="margin-left: 20px;font-size: 12px;">
      <tr>
        <td style="width: 15rem;">Diberikan Kepada</td>
        <td>: <?= $mhs["nama_mahasiswa"] ?></td>
      </tr>
      <tr>
        <td>Tempat Dan Tanggal Lahir</td>
        <td>: <?= $mhs["ttl"] ?></td>
      </tr>
      <tr>
        <td>Nomor Induk Mahasiswa</td>
        <td>: <?= $mhs["username"] ?></td>
      </tr>
      <tr>
        <td>Fakultas</td>
        <td>: <?= $mhs["fakultas"] ?></td>
      </tr>
      <tr>
        <td>Program Studi</td>
        <td>: <?= $mhs["prodi"] ?></td>
      </tr>
      <tr>
        <td>Tanggal Lulus</td>
        <td>: 0</td>
      </tr>
      <tr>
        <td>Status</td>
        <td>: Terakreditasi berdasarkan Surat Keputusan Badan Akreditasi Nasional Perguruan Tinggi Departemen Pendidikan Nasional Republik Indonesia.<br> Nomor : 416/SK/BAN-PT/Akred/S/X/2014 , Tanggal : 11-10-2014</td>
      </tr>
    </table>
    <table class="table table-bordered table-sm table-striped" style="font-size: 12px;margin-left: 20px; margin-right: 20px; width: 70rem;">
      <tr class="text-center">
        <td style="width: 3rem;">Kelompok</td>
        <td style="width: 12rem;">Mata Kuliah</td>
        <td style="width: 3rem;">Kredit (K)</td>
        <td style="width: 3rem;">Huruf</td>
        <td style="width: 3rem;">Angka</td>
        <td style="width: 3rem;">K X N</td>
      </tr>
      <?php foreach ($result_nilai as $nilai) :?>
      <tr><?php $total = $nilai['sks']; $total_1 = $total * $nilai['angka'] ?>
        <td class="text-center"><?php echo $nilai['kelompok']; ?></td>
        <td><?php echo $nilai['matkul']; ?></td>
        <td align="center"><?php echo $nilai['sks']; ?></td>
        <td align="center"><?php echo $nilai['nilai']; ?></td>
        <td align="center"><?php echo $nilai['angka']; ?></td>
        <td align="center"><?php echo $total_1; ?></td>
      </tr>
      <?php endforeach ; ?>
    </table>
    <table class="table table-borderless table-sm" style="width: 20rem; margin-left: 20px;font-size: 12px;">
      <tr>
        <td>Jumlah SKS Diambil</td>
        <td> : 
          <?php $total = 0;?>
          <?php foreach ($result_nilai as $nilai) :?>
           <?php 
            $total = $total + $nilai['sks'];?>
          <?php endforeach ; ?>
          <?php echo $total; ?>
        </td>
      </tr>
      <tr>
        <td>Judul Skripsi</td>
        <td>: </td>
      </tr>
      <tr>
        <td>Predikat</td>
        <td>: </td>
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

    <script type="text/javascript">
      window.print();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>