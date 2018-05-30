<!DOCTYPE html>
<html>
<head>
	<title>pinjam</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
</head>
<body class="tm-bg-img-content">
        <div class="container-fluid">
			<nav class="navbar navbar-full">
			    <div class="text-xs-center tm-navbar-rounded" id="tmNavbar">
			      <ul class="nav navbar-nav">
			          <li class="nav-item">
			            <a class="nav-link" href="index.html">Back to Home</a>
			          </li>                                        
			      </ul>
			    </div>
			</nav>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">

            <p class="tm-site-description">Silahkan isi form berikut untuk meminjam buku</p>
        </div>
			  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form action="index.html" method="post" class="tm-contact-form">                                
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-left">
                        	<p>Nama Lengkap</p>
                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-right">
                        	<p>Tanggal peminjaman buku</p>
                            <input type="date" id="contac_date" name="contac_date" class="form-control" placeholder="Date"  required/>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-left">
                            <p>Kode Buku</p>
                            <input type="text" id="contact_code" name="contact_code" class="form-control" placeholder="Code"  required/>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-right">
                            <p>Id line</p>
                            <input type="text" id="contact_line" name="contact_line" class="form-control" placeholder="ID Line"  required/>
                        </div>
                        <div class="form-group">
                        	<p>Judul Buku</p>
                            <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                        </div>
                                          
                        <button type="submit" class="btn tm-btn-brown-square pull-xs-right">Submit</button>                          
                    </form>   
                </div> <!-- col -->
            </nav>
        </div>
    </div>
</body>
</html>