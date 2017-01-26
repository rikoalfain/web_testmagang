<?php
	include"../lib/koneksi.php";
	$id=isset($_POST['id'])?$_POST['id']:"";
	$nama=isset($_POST['nama'])?$_POST['nama']:"";
	$id_kategori=isset($_POST['id_kategori'])?$_POST['id_kategori']:"";
	$harga=isset($_POST['harga'])?$_POST['harga']:"";
	$jumlah=isset($_POST['jumlah'])?$_POST['jumlah']:"";
	$btnsimpan=isset($_POST['btnsimpan'])?$_POST['btnsimpan']:"";
	$lastupdate=date("Y-m-d");
	
	if ($btnsimpan=="Disimpan")
	{
		$query=$db->prepare("update tbbarang SET nama='$nama',id_kategori='$id_kategori',harga='$harga',jumlah='$jumlah',lastupdate='$lasupdate
		' where id='$id'");
		$query->execute();
		echo"<script>alert('Sudah Disimpan');location.href='index.php?p=tbbarang'</script>";
	}
?>