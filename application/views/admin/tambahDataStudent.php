<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"><?= $title ?></h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					<div class="card">
						<div class="card-body">

							<form action="<?= base_url('admin/DataStudent/tambahDataAksi') ?>" method="POST" enctype="multipart/form-data">

								<div class="form-group">
									<label>Nama Anak</label>
									<input type="text" name="nama_anak" class="form-control">
									<?= form_error('nama_anak', '<div class="text-small text-danger"></div>') ?>
								</div>

								<div class="form-group">
									<label>Tanggal Lahir Anak</label>
									<input type="date" name="tgl_lahir_anak" class="form-control">
									<?= form_error('tgl_lahir_anak', '<div class="text-small text-danger"></div>') ?>
								</div>

								<div class="form-group">
									<label>Usia Anak</label>
									<input type="text" name="usia_anak" class="form-control">
									<?= form_error('usia_anak', '<div class="text-small text-danger"></div>') ?>
								</div>

								<div class="form-group">
									<label>No HP Anak</label>
									<input type="text" name="no_hp_anak" class="form-control">
									<?= form_error('no_hp_anak', '<div class="text-small text-danger"></div>') ?>
								</div>

								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" class="form-control">
									<?= form_error('agama', '<div class="text-small text-danger"></div>') ?>
								</div>

								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select name="jenis_kelamin" class="form-control">
										<option disabled readonly selected>Pilih Jenis Kelamin</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
									<?= form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
								</div>

								<div class="form-group">
									<label>Parents</label>
									<select name="parents" class="form-control">
										<option disabled readonly selected>Pilih Orang Tua</option>
										<?php foreach ($all_hubungan as $hubungan) : ?>
										<option value="<?= $hubungan->nama_parents ?>"><?= $hubungan->nama_parents ?>
										</option>
										<?php endforeach; ?>
									</select>
									<?= form_error('parents', '<div class="text-small text-danger"></div>') ?>
								</div>

								<div class="form-group">
									<label>Tanggal Masuk</label>
									<input type="date" name="tanggal_masuk" class="form-control">
									<?= form_error('tanggal_masuk', '<div class="text-small text-danger"></div>') ?>
								</div>

								<div class="form-group">
									<label>Photo</label>
									<input type="file" name="photo" class="form-control">
									<?= form_error('photo', '<div class="text-small text-danger"></div>') ?>
								</div>


								<button type="submit" class="btn btn-success">Submit</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
