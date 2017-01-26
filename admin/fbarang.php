<div id="box">
	<div class="judul">
	</div>
	<div class="isi">
		<form method="get" action="savebarang.php">
			<table>
				<tr>
					<td>nama</td>
					<td>:</td>
					<td><input type="text" name="nama" id="nama"></td>
				</tr>
				<tr>
					<td>id kategori</td>
					<td>:</td>
					<td><input type="text" name="id kategori" id="id kategori"></td>
					<select name="id_kategori">
					<?php
					include"../lib/koneksi";
					$query=$db->prepare("select*from tbkategori");
					$db->excute();
					$data=$dbfetchall();
					foreach ($data as $dbkategori){	
					?>
					<option value="<?=$dkategori['id_kategori']?>"><?=$
					$dkategori>['nama']?></option>
					
					
				</tr>
				<tr>
					<td>harga</td>
					<td>:</td>
					<td><input type="text" name="harga" id="harga"></td>
				</tr>
				<tr>
					<td>jumlah</td>
					<td>:</td>
					<td><input type="text" name="jumlah" id="jumlah"></td>
				</tr>
				<tr>
					<td>gambar</td>
					<td>:</td>
					<td><input type="text" name="gambar" id="gambar "></td>
				</tr>
				<tr>
					<td>lastupdate</td>
					<td>:</td>
					<td><input type="text" name="lastupdate" id="lastupdate"></td>
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