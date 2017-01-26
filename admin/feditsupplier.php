 <?php
 	$id=isset($_GET['id'])?$_GET['id']:"";
 	include"../lib/koneksi.php";
 	$query=$db->prepare("select * from supplier where id='$id'");
 	$query->execute();
 	$dsupplier=$query->fetch();

 ?>
 <div id="box">
 	<div class="judulb">
 	</div>
 	<div class="isib">
 		<form method="get" action="editsupplier.php">
 			<table>
 				<tr>
 					<td>id</td>
 					<td>:</td>
 					<td><?=$dsupplier['id']?><input type="hidden" name="id" id="id" value="<?=$dsupplier['id']?>"></td>
 				</tr>
 				<tr>
 					<td>nama</td>
 					<td>:</td>
 					<td><input type="text" name="nama" id="nama" value="<?=$dsupplier['nama']?>"></td>
 				</tr>
 				<tr>
 					<td>alamat</td>
 					<td>:</td>
 					<td><input type="text" name="alamat" id="alamat" value="<?=$dsupplier['alamat']?>"></td>
 				</tr>
 				<tr>
 					<td>telepon</td>
 					<td>:</td>
 					<td><input type="text" name="telepon" id="telepon" value="<?=$dsupplier['telepon']?>"></td>
 				</tr>
 				<tr>
 					<td>gmail</td>
 					<td>:</td>
 					<td><input type="text" name="gmail" id="gmail" value="<?=$dsupplier['gmail']?>"></td>
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
 