<div id="box">
	<div class="judul">
			Data Maskapai||<a href="?p=fbarang">Tambah Data</a>
	</div>
	<div class="isi">
		<div style="overflow-x:auto">
			<table>
				<tr>
					<th>id</th>
					<th>nama maskapai</th>
					<th>kategori maskapai</th>
					<th>opsi</th>
				</tr>
				<?php
					include_once"../lib/koneksi.php";
					$query=$db->prepare("select * from tbbarang");
					$query->execute();
					$data=$query->fetchAll();
					foreach ($data as $tbbarang){
						?> 
						<tr>
							<td><?=$tbbarang['id']?></td>
							<td><?=$tbbarang['nama']?></td>
							<td><?=$tbbarang['id_kategori']?></td>
							<td><a href="?p=edittbbarang&id=<?=$tbbarang['id']?>">
								Edit</a>|<a href=?p=tbbarang&id=$tbbarang['id']">
								hapus</a></td>
						</tr>
						<?php
						$aksi=include_once"../lib/koneksi.php";
						$query=$db->prepare("select * from tbbarang");
						$query->execute();
						$data=$query->fetchAll();

					}
				?>
				</table>
				</div>
		</div>
</div>
