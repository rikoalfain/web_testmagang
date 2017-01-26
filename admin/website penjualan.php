<html>
	<head>
		<title>Barang</title>
		<link rel="stylesheet" href="../style/styles.css" type="text/css">
		<meta name="viewport" content="width=device-intial-scale:1.0,user-scale b=0"/>
	</head>
	<body>
			<div id="header">
				<h1>Stok Barang</h1>
			</div>
			<div id="konten">
				<div id="tombol">
					<h1 class="menu">Menu</h1>
						<a href="ewarung.php" id="kiri"><h4>HOME</h4></a>
						<a href="isibarang.php" id="kiri"><h4>BARANG</h4></a>
						<a href="?p=" id="kiri"><h4>KATOGORI</h4></a>
						<a href="#" id="kiri"><h4>USER</h4></a>
						<a href="#" id="kiri"><h4>PENGaTURAN</h4></a>
						<a href="#" id="kiri"><h4>JUMPLAH BARANG</h4></a>
				</div>
			</div>
			<div id="tengah">
			<?php
				$a=isset($_GET ['a'])?$_GET['a']:"dashboard";
				include"$a.php";
			?>
			
			</div>
			<div id="footer"> 
				<div id="copyright">Copyright@2016 by Richo s.Al</div> 
			</div>
	</body>
</html>