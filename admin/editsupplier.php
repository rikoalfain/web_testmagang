<?php
	include"../lib/koneksi.php";
	$id=isset($_GET['id'])?$_GET['id']:"";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$alamat=isset($_GET['alamat'])?$_GET['alamat']:"";
	$telepon=isset($_GET['telepon'])?$_GET['telepon']:"";
	$gmail=isset($_GET['gmail'])?$_GET['gmail']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if ($btnsimpan=="Disimpan")
	{
		$query=$db->prepare("update supplier SET nama='$nama',alamat='$alamat',telepon='$telepon',gmail='$gmail' where id='$id'");
		$query->execute();
		echo"<script>alert('Data Sudah Dirubah');location.href='index.php?p=dsupplier'</script>";
	}
?>
	