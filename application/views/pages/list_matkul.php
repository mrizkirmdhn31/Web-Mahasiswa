<div class="container">
		<hr>
		<h1><marquee>
			<font color="#42729B">
				..::JADWAL MATA KULIAH 4IA01::..
			</font>
		</marquee></h1>
		<hr>
		<a href="<?php echo base_url('Halaman/tambah') ?>" class="btn btn-primary">Tambah</a>
		<a href="<?php echo base_url('Halaman/logout') ?>" class="btn btn-danger">Logout</a>
		<table border="1px" align="center" width="80%" style="text-align: center;">
			<tr>
				<th rowspan="2">Kode Matkul</th>
				<th rowspan="2">Hari</th>
				<th rowspan="2">Mata Kuliah</th>
				<th colspan="2">Jam</th>
				<th rowspan="2">Aksi</th>
			</tr>
			<tr>
			<th>Masuk</th>
			<th>Keluar</th>	
		</tr>
		<?php foreach ($sql as $obj1){  ?>
		<tr class="gray-list">
			<td><?php echo $obj1->kd_mk; ?></td>
			<td><?php echo $obj1->hari; ?></td>
			<td><?php echo $obj1->matkul; ?></td>
			<td><?php echo $obj1->masuk; ?></td>
			<td><?php echo $obj1->keluar; ?></td>
			<td align="center">
				<a href="<?php echo base_url('Halaman/edit/'.$obj1->id) ?>" class="btn btn-success btn-sm">Edit </a>
				<a href="<?php echo base_url('Halaman/delete/'.$obj1->id) ?>" class="btn btn-danger btn-sm">Delete </a>
			</td>
		</tr>

		<?php } ?>
		
		</table>
		<hr>
	<div class="footer" align="center" >
		&copy; 4IA10
	</div>
	</div>