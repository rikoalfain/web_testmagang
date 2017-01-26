<?php
	include"../lib/koneksi.php";
	$Nama=isset($_GET['Nama'])?$_GET['Nama']:"";
	$Alamat=isset($_GET['Alamat'])?$_GET['Alamat']:"";
	$Telephone=isset($_GET['Telephone'])?$_GET['Telephone']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if($btnsimpan)
	{
		$query=$db->prepare("insert into member values('','$Nama','$Alamat','$Telephone')");
		$query->execute();
		echo"<script>alert('Data sudah disimpan');location.href='index.php?p=member'
		</script>";
	}
?>