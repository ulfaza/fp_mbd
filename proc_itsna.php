<!DOCTYPE html>
<html>
<head>
	<title>tabel1</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
</head>
<body class="tm-bg-img-content">
<?php
include ("connection.php");
//tampilkan tabel mahasiswa_ilkom
$sql = "CALL tampilin()"
$result = mysqli_query($conn,$sql);
//$procedure = "CALL bonus()";
//$bonus = mysqli_query($db, $procedure);
//$result=mysql_query('SELECT * FROM mahasiswa_ilkom');
if (isset($_POST["submit"])) {
   include ("connection.php");
   $procedure = "CALL tampilin()";
   mysqli_query($conn, $procedure);

}

// else if(isset($_POST["back"])) {
   
//    $Kembali = "UPDATE admin
//                SET gaji=3000000
//                WHERE id_admin='A0001'";
//    mysqli_query($db, $Kembali);

// }

?>


<table class="table table-bordered" style="margin-top:10px"> 
				<tr >
			      <td>ID_ANGGOTA</td>
			      <td>NAMA</td>
			      <td>KATEGORI</td>
			      <td>TGL PINJAM</td>
			    </tr>
			<?php
				     include "connection.php";
				     $query = "CALL tampilin()";
				     while($data = mysqli_fetch_array($query)) {?>
				    <tr>
				    	<td><?php echo $data['a.id_anggota'];?></td>
				        <td><?php echo $data['a.nama'];?></td>
				        <td><?php echo $data['kt.nama_kategori'];?></td>
				        <td><?php echo $data['p.tgl_pinjam'];?></td>
				     
				    </tr>
		<?php }	?>
        </table>


</body>
</html>