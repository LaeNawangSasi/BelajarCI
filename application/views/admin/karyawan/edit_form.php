<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
			</div>
				<?php endif; ?>

				<!-- Card  -->
			<div class="card mb-3">
			<div class="card-header">
						<a href="<?php echo site_url('admin/karyawan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/karyawan/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />

                            <div class="form-group">
                        <label for="price">ID Karyawan</label>
                        <input class="form-control <?php echo form_error('id') ? 'is-invalid':'' ?>"
                         type="number" name="id" min="0" placeholder="Karyawan ID" value="<?php echo $karyawan->Karyawan_id ?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('id') ?>
                        </div>
                    </div>

							<div class="form-group">
								<label for="name">Nama Karyawan*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Karyawan_nama" value="<?php echo $karyawan->Karyawan_nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Alamat Karyawan</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" min="0" placeholder="Karyawan Telepon" value="<?php echo $karyawan->Karyawan_alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>


                            <div class="form-group">
                            <label for="price">Telepon Karyawan</label>
                            <input class="form-control <?php echo form_error('telepon') ? 'is-invalid':'' ?>"
                             type="number" name="telepon" min="0" placeholder="Karyawan Telepon" value="<?php echo $karyawan->Karyawan_telepon ?>" />
                            <div class="invalid-feedback">
                                <?php echo form_error('telepon') ?>
                            </div>
                        </div>

                      

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>