<!DOCTYPE HTML>
<html>
	<head>
		<title>Tiket Online</title>
		<link rel="stylesheet" type="text/css" href="../styles/tampilan.css">
		<meta name="viewport" content="width=device-width,intial-scale 1.0,user-scale b=0"/>
		<script src="../js/jquery-2.1.1.js"></script>
		<script src="../js/umum.js"></script>
	</head>
	
		<body>
			<div id="header">
			<div class="logo">
				<a>E<span>Wa</span></a>
			</div>
			</div>
			<a href"#" class="mobile">Menu</a>
			<div id="container">
				<div class=
					"sidebar">
					<ul id="nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">Barang</a></li>
						<li><a href="#">Kategori</a></li>
						<li><a href="#">Member</a></li>
					</ul>
					
				</div>
				<div class="content">
				<?php
					$p=isset($_GET['P'])?$_GET['P']:"dashboard";
					include"$p.php";
				?>
				
				</div>
				<div id="footer"> 
				<div id="copyright">Copyright@2016 by Richo s.Al</div> 
			</div>
		</body>
</html>
			
			
		