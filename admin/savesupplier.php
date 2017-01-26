<?php
	include"../lib/koneksi.php";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$alamat=isset($_GET['alamat'])?$_GET['alamat']:"";
	$telepon=isset($_GET['telepon'])?$_GET['telepon']:"";
	$gmail=isset($_GET['gmail'])?$_GET['gmail']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if ($btnsimpan)
	{
		$query=$db->prepare("insert into supplier values('','$nama','$alamat','$telepon','$gmail')");
		$query->execute();
		echo"<script>alert('Data sudah tersimpan');location.href='index.php?p=dsupplier'</script>";
	}
?>