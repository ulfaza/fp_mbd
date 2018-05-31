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

    <!-- <div class="tm-bg-img-header"> -->
        <div class="container-fluid">
            
            <div id="top" class="tm-header-container">
                
                <!-- 1. Site Header -->
                <div class="row tm-site-header">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                        <h1 class="tm-site-title">TABEL</h1>   
                    </div>
                </div>
TABEL ANGGOTA<br>
		
			<table class="table table-bordered" style="margin-top:10px"> 
				<tr >
			      <td>ID_ANGGOTA</td>
			      <td>NAMA</td>
			      <td>TGL DAFTAR</td>
			      <td>NO TELP</td>
			      <td>ALAMAT</td>
			      <td>TGL LAHIR</td>
			      <td>EDIT</td>
			      <td>HAPUS</td>
			    </tr>
			<?php
				     include "connection.php";
				     $query = mysqli_query($conn,"SELECT * FROM anggota");
				     while($data = mysqli_fetch_array($query)) {?>
				    <tr>
				    	<td><?php echo $data['id_anggota'];?></td>
				        <td><?php echo $data['nama'];?></td>
				        <td><?php echo $data['tgl_daftar'];?></td>
				        <td><?php echo $data['telp'];?></td>
				        <td><?php echo $data['alamat'];?></td> 
				        <td><?php echo $data['tgl_lahir'];?></td>
				       	<td><a href="">EDIT</a></td>
				       	<td><a href="">DELETE</a></td>	  
				    </tr>
		<?php }	?>
        </table>
				<a href="tambah_anggota.php" class="tm-bg-green-1 tm-btn-rounded tm-btn-green">TAMBAH</a>

<br><br>TABEL KOLEKSI<br>
		
			<table class="table table-bordered" style="margin-top:10px"> 
				<tr >
			      <td>ID KOLEKSI</td>
			      <td>ID KATEGORI</td>
			      <td>ID PENULIS</td>
			      <td>JUDUL</td>
			      <td>TAHUN</td>
			      <td>ISBN</td>
			      <td>PENULIS</td>
			      <td>EDIT</td>
			      <td>HAPUS</td>
			    </tr>
			<?php
				     include "connection.php";
				     $query = mysqli_query($conn,"SELECT * FROM KOLEKSI");
				     while($data = mysqli_fetch_array($query)){?>
				    <tr>
				        <td><?php echo $data['kl_id']?></td>
				        <td><?php echo $data['id_kategori']?></td>
				        <td><?php echo $data['p_id']?></td>
				        <td><?php echo $data['kl_judul']?></td>
				        <td><?php echo $data['kl_tahun']?></td> 
				        <td><?php echo $data['kl_isbn']?></td>
				       	<td><?php echo $data['penulis']?></td>
				       	<td><a href="">EDIT</a></td>
				       	<td><a href="">DELETE</a></td>				  
				    </tr>"
		<?php }	?>
        </table>
        <a href="tambah_koleksi.php" class="tm-bg-green-1 tm-btn-rounded tm-btn-green">TAMBAH</a>
        <BR><BR>
TABEL KATEGORI<br>
		
			<table class="table table-bordered" style="margin-top:10px"> 
				<tr >
			      <td>ID KATEGORI</td>
			      <td>NAMA KATEGORI</td>
			      <td>EDIT</td>
			      <td>HAPUS</td>
			    </tr>
			<?php
				     include "connection.php";
				     $query = mysqli_query($conn,"SELECT * FROM KATEGORI");
				     while($data = mysqli_fetch_array($query))
				     echo "
				    <tr>
				        <td>".$data['id_kategori']."</td>
				        <td>".$data['nama_kategori']."</td>
				        <td></td>
				       	<td> </td>			  
				    </tr>"
			?>
        </table>
        <a href="coba.php" class="tm-bg-green-1 tm-btn-rounded tm-btn-green">TAMBAH</a>
        <BR>
        <BR>
    </div>
</div>
</body>
</html>