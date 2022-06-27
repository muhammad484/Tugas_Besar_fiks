<?php 
	require 'fungsi.php';
	if (isset($_POST['submit'])) {
		$cek = $_POST['ns'];
		foreach ($_POST['kode'] as $key => $value) {
			if (in_array($_POST['kode'][$key], $cek)) {
				$kode = $_POST['kode'][$key];
				$matkul = $_POST['matkul'][$key];
				$nama_dosen = $_POST['nama_dosen'][$key];
				$kelas = $_POST['kelas'][$key];
				$sks = $_POST['sks'][$key];
				$nama_mhs = $_POST['nama_mhs'];
				$prodi = $_POST['prodi'];
				$fakultas = $_POST['fakultas'];
				$semester = $_POST['semester'];
				$query = "INSERT INTO tb_krs VALUES ('','$nama_dosen','$nama_mhs','$prodi','$fakultas','$matkul','$kode','$semester','$kelas','$sks')";
				mysqli_query($koneksi,$query);
				// var_dump($query);
			}
		}		
		if (mysqli_affected_rows($koneksi) > 0) {
			echo "
				<script>
					alert('krs berhasil ditambahkan');
					document.location.href = 'print_krs.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('krs gagal diubah');
					document.location.href = 'krs.php';
				</script>
			";
		}
	}

 ?>