<?php
	session_start();
	if(isset($_POST["btnout"])){
		unset($_SESSION['user']);
		header("location:index.php?p=dashboard");
	}
?>