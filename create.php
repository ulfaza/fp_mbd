<?php

	include 'connection.php';

	$id_anggota = $_POST["id_anggota"];
	$nama = $_POST["nama"];
	$tgl_daftar = $_POST["tgl_daftar"];
	$telp = $_POST["telp"];
	$alamat = $_POST["alamat"];
	$tgl_lahir = $_POST["tgl_lahir"];
	

	$query = "INSERT INTO anggota VALUES ('$id_anggota','$nama','$tgl_daftar','$telp','$alamat', '$tgl_lahir')";
	$sql = mysqli_query ($conn, $query);
	header("location:tabel1.php");
?>