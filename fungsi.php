<?php 
	$koneksi = mysqli_connect("localhost","root","","login");

	function profil($profil){
		global $koneksi;
		$result = mysqli_query($koneksi,$profil);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function nilai($nilai){
		global $koneksi;
		$result = mysqli_query($koneksi,$nilai);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
	function ubah($data){
		global $koneksi;
		$id = $data['id'];
		$password = $data['password'];
		$result = "UPDATE mahasiswa SET password = '$password' WHERE id = $id";
		mysqli_query($koneksi,$result);
		return mysqli_affected_rows($koneksi);
	}
	function query($query){
		global $koneksi;
		$result = mysqli_query($koneksi,$query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}	
	function cari($cari){
		global $koneksi;
		$query = "SELECT * FROM tb_tugas_akhir WHERE judulTA LIKE '%$cari%'";
		return query($query);
	}
 ?>