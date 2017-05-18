<?php
  ob_start();
  session_start();
  require_once 'fungsi/dbconnect.php';
  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
  }
  // select loggedin users detail
  $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
  $userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/iconn.png">

    <title>PMB - Universitas Bandar Lampung</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<meta name="keywords" content="Simple Footer Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //for-mobile-apps -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:700" rel="stylesheet" />
	<link href="https://fonts.google.com/specimen/Dosis" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>
    
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<img class="img-responsive" src="assets/img/icon.png" alt="" />
			<a class="navbar-brand" href="index.php">Penerimaan <br/> Mahasiswa Baru</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pendaftaran <span class="caret"></a>				
				<ul class="dropdown-menu">
					<li><a href="pendaftaranS1.php">Pendaftaran S1 Reguler</a></li>
					<li><a href="#">Beasiswa S1</a></li>
					<li><a href="#">Pendaftaran Pasca Sarjana</a></li>
				</ul>				
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ujian <span class="caret"></a>				
				<ul class="dropdown-menu">
					<li><a href="#">Mulai Ujian</a></li>
					<li><a href="#">Lihat Hasil Ujian</a></li>
				</ul>				
			</li>
			<li><a href="#">Lihat Data Pendaftaran</a></li>
			<li class="dropdown login active">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome <span class="caret"></a>				
				<ul class="dropdown-menu">
					<li class="dropdown-item"><h6 class="dropdown-header"><?php echo $userRow['userName']; ?></h6></li>
					<br>
					<li class="dropdown-item"><a href="logout.php?logout">Logout</a></li>
				</ul>				
			</li>
          </ul>
        </div>
      </div>
    </div>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="assets/img/user.png" alt="Stanley">
					<h1 class="desc">Hi... <?php echo $userRow['userName']; ?></h1>
					<p>Dengan Formulir PMB Digital, calon mahasiswa dimudahkan untuk mengakses, 
					   mendaftar dan menginput data akademik melalui internet dengan menggunakan smartphone, 
					   tab ataupun komputer dan laptop. Data yang sudah diinput juga langsung tersimpan di dalam server, 
					   tidak seperti di kertas yang mudah hilang atau rusak.</p>
				
				</div>
			</div>
	    </div>
	</div>
	

		
	<!-- footer -->
		
		<div class="content">
			<div class="footer-grids">
				<div class="footer one">
					<img class="logo-footer adam" src="assets/img/ubl_icon.png" alt="" />
					<div class="clear"></div>
				</div>
				<div class="footer two">
					<h3>Quick Link</h3>
					<ul>
						<li><a target="_blank" href="ubl.ac.id"><i></i>Universitas Bandar Lampung</a></li>
						<li><a target="_blank" href="#"><i></i>Portal LPPM UBL</a></li>
						<li><a target="_blank" href="#"><i></i>Portal LPIK UBL</a></li>
						<li><a target="_blank" href="#"><i></i>Siater UBL</a></li>
					</ul>
				</div>
				<div class="footer three">
					<h3>Contact Information</h3>
					<ul>
						<li>Kampus B : Jl. Zainal Abidin Pagar Alam No. 89, Labuhan Ratu Bandar Lampung 35142
						Lampung
						Indonesia</li>					
						<li>0721-789825 (Kampus B)</li>
						<li><a href="mailto:info@ubl.ac.id">info@ubl.ac.id</a> </li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="copy-right-grids">
				<div class="copy-left">
						<p class="footer-gd">© 2017 Universitas Bandar Lampung. All Rights Reserved</p>
				</div>
				<div class="copy-right">
					<ul>
						<li><a target="_blank" href="ubl.ac.id">Universitas Bandar Lampung</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		
    <!-- Placed at the end of the document so the pages load faster -->		
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>		
  </body>
</html>
