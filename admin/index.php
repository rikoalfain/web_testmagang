<?php
	session_start();
	$con = mysqli_connect("localhost","root","","dbpos2");
	if(!isset($_SESSION["user"])){
		header("location:login.php");
	}
?>
<html>
	<head>
		<title>Tiket Online</title>
			<link rel="stylesheet" type="text/css" href="../styles/tampilan.css" >
		<meta name="viewport"content="width=device-width,intial-scale:1.0,user-scale b=0"/>
		<script src="../js/jquery-2.1.1.js"></script>
		<script src="../js/umum.js"></script>
			
	</head>
	<body>
		<form method="post" action="procesLogin.php">
		<div id="header">
			<div class="logo">
				<a href="?p=profil">E<span> tiket</span></a>
			</div>
		</div>
		<a href="#"class="mobile">Menu</a>
		
		<div id="container">
			<div class="sidebar">
				<ul id="nav">
					<li><a href="?p=dashboard" class="selected">Home</a></li>
					<li class="barang"><a href="?p=tbbarang">Maskapai</a></li>
					<li class="kategori"><a href="?p=dkategori">Jadwal Penerbangan</a></li>
					<li class="member"><a href="?p=member">Transaksi Tiket</a></li>
					<li class="user"><a href="">Laporan Penjualan</a></li>
					
				</ul>
				<input type="submit" name="btnout" value="Sign Out">
			</div>
			<div class="content">
			<?php
				$p=isset($_GET['p'])?$_GET['p']:"dashboard";
					include"$p.php";
			?>
		</div>
		</form>
	</body>
</html>