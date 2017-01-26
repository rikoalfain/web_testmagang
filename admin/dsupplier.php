<div id="box">
	<div class="judul">
		Data Supplier||<a href="?p=fsupplier">Tambah Data</a>
	</div>
	<div class="isi">
		<div style="overflow-x:auto">
			<table>
				<tr>
					<th>ID</th>
					<th>PT</th>
					<th>Nomor Induk PT</th>
					<th>Kurir</th>
					<th>Tanggal Masuk</th>
					<th>opsi</th>
				</tr>
				<?php
					include_once"../lib/koneksi.php";
					$query=$db->prepare("select * from suplier");
					$query->execute();
					$data=$query->fetchAll();
					foreach($data as $dsupplier){
						?>
						<tr>
							<td><?=$dsupplier['id']?></td>
							<td><?=$dsupplier['pt']?></td>
							<td><?=$dsupplier['nomorinduk']?></td>
							<td><?=$dsupplier['kurir']?></td>
							<td><?=$dsupplier['tanggalmasuk']?></td>
							<td><a href="?p=feditsupplier&id=<?=$dsupplier['id']?>">
							edit</a>|<a href="?p=dsupplier&id=$dsupplier['id']">
							hapus</a></td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
	</div>
</div>