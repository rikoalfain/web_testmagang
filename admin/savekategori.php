<?php
	include"../lib/koneksi.php";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$keterangan=isset($_GET['keterangan'])?$_GET['keterangan']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if ($btnsimpan)
	{
		$query=$db->prepare("insert into tbkategori values('','$nama','$keterangan')");
		$query->execute();
		echo"<script>alert('Data Sudah tersimpan');location.href='index.php?p=dkategori'
		</script>";
	}
?>