<?php 
	require 'fungsi.php';
	$id = $_GET['id'];
	$mhs = profil("SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = $id")[0];
	if (isset($_POST['submit'])) {
		// cek data berubah ?
		if (ubah($_POST) > 0) {
			echo "
				<script>
					alert('data berhasil diubah');
					document.location.href = 'ubah_password.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('data gagal diubah');
					document.location.href = 'ubah_password.php';
				</script>
			";
		}
	}

 ?>