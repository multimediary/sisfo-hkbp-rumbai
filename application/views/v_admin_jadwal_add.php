  <div class="content-wrapper" >
    <section class="content-header">
      <h3>
        Tambah Jadwal
      </h3>
    </section>
<?php 
$level = $this->uri->segment(1);
?>
    <!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<span>Silahkan melengkapi form berikut</span>
					</h3>
				</div>
				<div class="box-body">
				  <div class="row">
				  <?php echo form_open_multipart("$level/jadwal_aksi_tambah"); ?>
					<div class="col-md-4">
					 
					  <div class="form-group">
						<label>Pilih Kelas</label>
						<select name="kelas_id" class="form-control select2" data-placeholder="Pilih Kelas">
							<option></option>
							<?php foreach($tbl_kelas as $kelas){?>
							<option value="<?php echo $kelas->kelas_id;?>"><?php echo $kelas->kelas_nama;?></option>
							<?php } ?>
					</select>
					  </div>
					   <div class="form-group">
						<label>Nama Mapel</label>
						<select name="mapel_id" class="form-control select2" data-placeholder="Pilih Mapel">
							<option></option>
							<?php foreach($tbl_mapel as $mapel){?>
							<option value="<?php echo $mapel->mapel_id;?>"><?php echo $mapel->mapel_nama;?></option>
							<?php } ?>
						</select>
					  </div>
					  <div class="form-group">
						<label>Hari</label>
						<select name="jadwal_hari" class="form-control select2" data-placeholder="Pilih Hari">
							<option></option>
							<option value="0">Senin</option>
							<option value="1">Selasa</option>
							<option value="2">Rabu</option>
							<option value="3">Kamis</option>
							<option value="4">Jum'at</option>
							<option value="5">Sabtu</option>
						</select>
					  </div>
					  <div class="form-group">
						<label>Jam Pelajaran</label>
						<input type="time" class="form-control" name="jadwal_jam" placeholder="Jam Pelajaran, Contoh : 10:00:00">
					  </div>
					  <div class="form-group">
						<label>Tahun Ajaran</label>
						<input type="text" class="form-control" name="jadwal_tahunajaran" placeholder="Tahun Ajaran, Contoh : 2019-2020">
					  </div>
					  <div class="form-group">
						<input type="submit" value="Submit" class="btn btn-success">
					  </div>
					</div>
					<?php echo form_close(); ?>
				  </div>
				</div>
			</div>
		</div>
      </div>
    </section>
  </div>