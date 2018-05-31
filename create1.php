<?php

	include 'connection.php';

	$kl_id = $_POST["kl_id"];
	$id_kategori = $_POST["id_kategori"];
	$p_id = $_POST["p_id"];
	$kl_judul = $_POST["kl_judul"];
	$kl_tahun = $_POST["kl_tahun"];
	$kl_isbn = $_POST["kl_isbn"];
	$penulis = $_POST["penulis"];

	$query = "INSERT INTO koleksi VALUES ('$kl_id','$id_kategori','$p_id','$kl_judul','$kl_tahun', '$kl_isbn', '$penulis')";
	$sql = mysqli_query ($conn, $query);
	header("location:tabel1.php");
?>