<?php
// session_start();
include 'connection.php';

	$namanew = $_POST["namanew"];
	$tgl_daftarnew = $_POST["tgl_daftranew"];
	$telpnew = $_POST["telpnew"];
	$alamatnew = $_POST["alamatnew"];
	$tgl_lahirnew = $_POST["tgl_lahirnew"];
var_dump($namanew);

// $ubah= $_SESSION["username"];
$query = "UPDATE anggota SET nama = '$usernew', tgl_lahir = '$tgl_lahirnew', telp ='$telpnew', alamat = '$alamatnew', tgl_lahir = '$tgl_lahirnew' WHERE nama='$ubah'";

if ($conn->query($query)===TRUE){
	header ("Location: ../16701/formubah.php");
} else {
	echo "Error updating record: ".$conn->error;
}
?>