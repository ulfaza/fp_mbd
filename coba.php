<?php
include ("koneksi.php");
//tampilkan tabel mahasiswa_ilkom
//$view = "SELECT * FROM top_5_cust";
//$result = mysqli_query($db, $view);

//$result=mysql_query('SELECT * FROM mahasiswa_ilkom');
?>

<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>Best Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
   <!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
   <script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!-- for bootstrap working -->
   <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->


   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
  tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
</head>



<body>

<div class="header">
      <div class="container">
         <div class="header-grid">
            <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
               <ul>
                  <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="">mbdcookies@gmail.com</a></li>
                  <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>14045</li>
                  <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.php">Login</a></li>
                  <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.php">Register</a></li>
               </ul>
            </div>
            <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
               <ul class="social-icons">
                  <li><a href="#" class="facebook"></a></li>
                  <li><a href="#" class="twitter"></a></li>
                  <li><a href="#" class="instagram"></a></li>
               </ul>
            </div>
            <div class="clearfix"> </div>
         </div>
         <div class="logo-nav">
            <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
               <h1><a href="index.php">mbdcookies <span>House  of  Cookies</span></a></h1>
            </div>
            <div class="logo-nav-left1">
               <nav class="navbar navbar-default">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header nav_2">
                  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
               </div> 
               <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                  <ul class="nav navbar-nav">
                     <li class="active"><a href="index.html" class="act">Home</a></li> 
                     <!-- Mega Menu -->
                     
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                           <div class="row">
                              <div class="col-sm-4">
                                 <ul class="multi-column-dropdown">
                                    <h6>Manis</h6>
                                    <li><a href="products.html">Nastar</a></li>
                                    <li><a href="products.html">Putri Salju</a></li>
                                    <li><a href="products.html">Kastengel</a></li>
                                    <li><a href="products.html">Lidah Kucing</a></li>
                                    <li><a href="products.html">Choco Cookies</a></li>
                                    <li><a href="products.php">more...</a></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                                 <ul class="multi-column-dropdown">
                                    <h6>Asin</h6>
                                    <li><a href="products.html">kripik bawang</a></li>
                                    <li><a href="products.html">Telur Gabus</a></li>
                                    <li><a href="products.html">Cheeese Stick</a></li>
                                    <li><a href="products.html">Kacang Goreng</a></li>
                                    <li><a href="products.html">Kacang Telur</a></li>
                                    <li><a href="products.html">more...</a></li>
                                    
                                 </ul>
                              </div>
               
                              <div class="clearfix"></div>
                           </div>
                        </ul>
                     </li>
                     <li><a href="short-codes.html">Transaksi</a></li>
                     <li><a href="trigger_nida.php">Pemesanan</a></li>
                     
                  </ul>
               </div>
               </nav>
            </div>
            <div class="logo-nav-right">
               <div class="search-box">
                  <div id="sb-search" class="sb-search">
                     <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                     </form>
                  </div>
               </div>
                  <!-- search-scripts -->
                  <script src="js/classie.js"></script>
                  <script src="js/uisearch.js"></script>
                     <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                     </script>
                  <!-- //search-scripts -->
            </div>
            
            <div class="clearfix"> </div>
         </div>
      </div>
   </div>
   
   <h3>TOP 5 Customer</h3>
<table>
<tr>
   <th>Nama Customer</th>
   <th>Jumlah pembelanjaan</th>
</tr>
<?php
   include('koneksi.php');
   $view = "SELECT * FROM top_5_cust";
   $result = mysqli_query($db, $view);

   while ($row=mysqli_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>".$row['nama_cust']."</td>";
   echo "<td>".$row['jumlah_pembelanjaan']."</td>";
   echo "</tr>";
   }
mysqli_free_result($result);
?>
</table> 


</body>
</html>