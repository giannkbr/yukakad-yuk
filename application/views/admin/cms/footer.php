<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?= $title ?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"><?= $title ?></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			
				  <!-- general form elements -->
                  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form <?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('admin/Cms/editFooter') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="heading1">Heading1</label>
                    <input type="text" class="form-control" id="heading1" name="heading1" value="<?= $footer['heading1'] ?>">
                    <?= form_error('heading1', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <input type="text" class="form-control" id="copyright" name="copyright" value="<?= $footer['copyright'] ?>">
                    <?= form_error('copyright', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $footer['instagram'] ?>">
                    <?= form_error('instagram', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="cek" name="cek">
                    <label class="form-check-label" for="cek">Apakah Yakin?</label>
                    <?= form_error('cek', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>




