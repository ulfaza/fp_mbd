<!DOCTYPE html>
<html>
<head>
	<title>Halaman registrasi</title>
		<link rel="stylesheet" type="text/css" href="ini.css">
	<style>
	label {
		display: block;
	}
	</style>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TCUMBANG</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body class="tm-bg-img-content">

<form action="create.php" method="post" id="frmLogin">
	<div class="field-group">
			<div><label for="id_anggota">id_anggota :	</label></div>
			<div><input type="text" name="id_anggota" id="id_anggota"></div>
	</div>
	<div class="field-group">
			<div><label for="nama">nama :	</label></div>
			<div><input type="text" name="nama" id="nama"></div>
	</div>
	<div class="field-group">
			<div><label for="tgl_daftar">tgl_daftar:	</label></div>
			<div><input type="date" name="tgl_daftar" id="tgl_daftar"></div>
	</div>
	<div class="field-group">
			<div><label for="telp">telp :	</label></div>
			<div><input type="text" name="telp" id="telp"></div>
	</div>
	<div class="field-group">
			<div><label for="alamat">alamat :	</label></div>
			<div><input type="text" name="alamat" id="alamat"></div>
	</div>
	<div class="field-group">
			<div><label for="tgl_lahir">tgl_lahir :	</label></div>
			<div><input type="date" name="tgl_lahir" id="tgl_lahir"></div>
	</div>
	<div class="field-group">
			<div><button type="submit" name="register">Tambah!</button></div>
	</div>
	</ul>
</form>

</body>
</html>