<?php
	$dbname="dbpos2";
	$host="localhost";
	$user="root";
	$pass="";
	try{
		$db=new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e){
		die("connection Error :".$e->getMessage());
	}
?>