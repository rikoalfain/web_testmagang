<?php
	$con=mysqli_connect("localhost","root","","dbpos2");
	session_start();
	if(isset($_POST["btn-login"])){
		extract($_POST);
		$email=$con->real_escape_string($_POST["email"]);
		$password=$con->real_escape_string($_POST["pass"]);

		$resultUser = mysqli_query($con,"select email from login where email='$email' and password='$password'");
		$rowUser = mysqli_fetch_assoc($resultUser);

		if($rowUser['email'] != '' || $rowUser['email'] != null){
			$_SESSION['user'] = $rowUser['email'];
			header("location:index.php?p=dashboard");
		}
	}
?>
<html>
	<head>
		<title>Tiket Pesawat Online</title>
		<link type="styleshet" href="../style/tampilan.css">
		<form method="post">
	</head>
	<body>
		<div>
			<table>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
					<input type="email" name="email" value="Email">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td><input type="submit" name="btn-login" value="Login"></td>
				</tr>
			</table>
		</div>
	</body>
</html>