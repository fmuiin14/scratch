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

							<?php foreach ($parents as $parent) : ?>
							<form action="<?= base_url('admin/dataParent/updateDataAksi') ?>" method="POST">

								<div class="form-group">
									<label>Nama Parent</label>
									<input type="hidden" name="id_parents" class="form-control" value="<?= $parent->id_parents ?>">
									<input type="text" name="nama_parents" class="form-control" value="<?= $parent->nama_parents ?>">
									<?= form_error('nama_parents', '<div class="text-small text-danger"></div>') ?>
								</div>
								<div class="form-group">
									<label>Hubungan</label>
									<select name="hubungan" class="form-control">
                                        <option disabled readonly selected>Pilih hubungan</option>
                                        <option value="Ayah">Ayah</option>
                                        <option value="Ibu">Ibu</option>
                                    </select>
									<?= form_error('hubungan', '<div class="text-small text-danger"></div>') ?>
								</div>
								<div class="form-group">
									<label>No HP</label>
									<input type="text" name="no_hp" value="<?= $parent->no_hp ?>" class="form-control">
									<?= form_error('no_hp', '<div class="text-small text-danger"></div>') ?>
								</div>
								<div class="form-group">
									<label>Email Parents</label>
									<input type="text" name="email_parents" value="<?= $parent->email_parents ?>" class="form-control">
									<?= form_error('email_parents', '<div class="text-small text-danger"></div>') ?>
								</div>

								<button type="submit" class="btn btn-success">Submit</button>

							</form>
							<?php endforeach ; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
