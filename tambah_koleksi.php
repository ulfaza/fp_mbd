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

<form action="create1.php" method="post" id="frmLogin">
	<div class="field-group">
			<div><label for="kl_id">kl_id :	</label></div>
			<div><input type="text" name="kl_id" id="kl_id"></div>
	</div>
	<div class="field-group">
			<div><label for="id_kategori">id_kategori :	</label></div>
			<div><input type="text" name="id_kategori" id="id_kategori"></div>
	</div>
	<div class="field-group">
			<div><label for="p_id">p_id:	</label></div>
			<div><input type="text" name="p_id" id="p_id"></div>
	</div>
	<div class="field-group">
			<div><label for="kl_judul">kl_judul :	</label></div>
			<div><input type="text" name="kl_judul" id="kl_judul"></div>
	</div>
	<div class="field-group">
			<div><label for="kl_tahun">kl_tahun :	</label></div>
			<div><input type="text" name="kl_tahun" id="kl_tahun"></div>
	</div>
	<div class="field-group">
			<div><label for="kl_isbn">kl_isbn :	</label></div>
			<div><input type="text" name="kl_isbn" id="kl_isbn"></div>
	</div>
	<div class="field-group">
			<div><label for="penulis">penulis :	</label></div>
			<div><input type="text" name="penulis" id="penulis"></div>
	</div>
	<div class="field-group">
			<div><button type="submit" name="register">Tambah!</button></div>
	</div>
	</ul>
</form>

</body>
</html>