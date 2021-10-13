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
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="heading1">Heading1</label>
                    <input type="text" class="form-control" id="heading1" name="heading1" value="<?= $fitur['heading1'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="subheading1">Sub-Heading1</label>
                    <input type="text" class="form-control" id="subheading1" name="subheading1" value="<?= $fitur['subheading1'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="logo">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo" name="logo">
                        <label class="custom-file-label" for="logo">Pilih File</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="heading2">Heading2</label>
                    <input type="text" class="form-control" id="heading2" name="heading2" value="<?= $fitur['heading2'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="subheading1">Sub-Heading2</label>
                    <input type="text" class="form-control" id="subheading2" name="subheading2" value="<?= $fitur['subheading2'] ?>">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="cek" name="cek">
                    <label class="form-check-label" for="cek">Apakah Yakin?</label>
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
