	<?php
	include"../lib/koneksi.php";
	$id=isset($_GET['id'])?$_GET['id']:"";
	$Nama=isset($_GET['Nama'])?$_GET['Nama']:"";
	$Alamat=isset($_GET['Alamat'])?$_GET['Alamat']:"";
	$Telephone=isset($_GET['Telephone'])?$_GET['Telephone']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if ($btnsimpan=="Disimpan")
	{
		$query=$db->prepare("update member SET Nama='$Nama',Alamat='$Alamat',Telephone='$Telephone' where id='$id'");
		$query->execute();
		echo"<script>alert('Data Sudah Dirubah');location.href='index.php?p=member'</script>";
	}
?>
	