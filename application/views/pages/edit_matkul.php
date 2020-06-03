
<form action="<?php echo base_url('Halaman/edit_simpan') ?>" method="post" style="padding: 100px;">
	<?php echo form_hidden('id',$this->uri->segment(3)); ?>
	<div class="form-group">
		<label>Kode Mata Kuliah</label>
		<input type="text" name="kd_mk" class="form-control" required="true" value="<?php echo($matkul['kd_mk']); ?>" >
	</div>
	<div class="form-group">
		<label>Hari</label>
		<input type="text" name="hari" class="form-control" required="true" value="<?php echo($matkul['hari']); ?>">
	</div>
	<div class="form-group">
		<label>Mata Kuliah</label>
		<input type="text" name="matkul" class="form-control" required="true" value="<?php echo($matkul['matkul']); ?>">
	</div>
	<div class="form-group">
		<label>Jam Masuk</label>
		<input type="text" name="masuk" class="form-control" required="true" value="<?php echo($matkul['masuk']); ?>">
	</div>
	<div class="form-group">
		<label>Jam Keluar</label>
		<input type="text" name="keluar" class="form-control" required="true" value="<?php echo($matkul['keluar']); ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<a href="<?php echo base_url('Halaman') ?>" class="btn btn-danger">Kembali</a>
	</div>
	
</form>