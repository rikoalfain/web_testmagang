	<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	include"../lib/koneksi.php";
	$query=$db->prepare("select * from member where id='$id'");
	$query->execute();
	$dkategori=$query->fetch();

?>
<div id="box">
	<div class="judulb">
	</div>
	<div class="isib">
		<form method="get" action="editmember.php">
			<table>
				<tr>
					<td>id</td>
					<td>:</td>
					<td><?=$member['id']?><input type="hidden" name="id" id="id" value="<?=$member['id']?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="Nama" id="Nama" value="<?=$member['Nama']?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="Alamat" id="Alamat" value="<?=$member['Alamat']?>"> </td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td>:</td>
					<td><input type="text" name="Telephone" id="Telephone" value="<?=$member['Telephone']?>"> </td>
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



