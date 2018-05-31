<?php
include ("connection.php");
//tampilkan tabel mahasiswa_ilkom
$sql = "CALL tampilin()"
$result = mysqli_query($db,$sql);
//$procedure = "CALL bonus()";
//$bonus = mysqli_query($db, $procedure);
//$result=mysql_query('SELECT * FROM mahasiswa_ilkom');
if (isset($_POST["bonus"])) {
   include ("koneksi.php");
   $procedure = "CALL tampilin()";
   mysqli_query($db, $procedure);

}

else if(isset($_POST["back"])) {
   
   $Kembali = "UPDATE admin
               SET gaji=3000000
               WHERE id_admin='A0001'";
   mysqli_query($db, $Kembali);

}
?>