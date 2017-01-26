	<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	include"../lib/koneksi.php";
	$query=$db->prepare("select * from tbkategori where id='$id'");
	$query->execute();
	$dkategori=$query->fetch();

?>
<div id="box">
	<div class="judul">
	</div>
	<div class="isib">
		<form method="get" action="editkategori.php">
			<table>
				<tr>
					<td>id</td>
					<td>:</td>
					<td><?=$dkategori['id']?><input type="hidden" name="id" id="id" value="<?=$dkategori['id']?>"></td>
				</tr>
				<tr>
					<td>nama</td>
					<td>:</td>
					<td><input type="text" name="nama" id="nama" value="<?=$dkategori['nama']?>"></td>
				</tr>
				<tr>
					<td>keterangan</td>
					<td>:</td>
					<td><input type="text" name="keterangan" id="keterangan" value="<?=$dkategori['keterangan']?>"> </td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="btnsimpan" value="Disimpan">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>



