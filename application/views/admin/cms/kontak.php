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
                <h3 class="card-title">Form Hero</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="heading">Heading1</label>
                    <input type="text" class="form-control" id="heading" name="heading1" value="<?= $kontak['heading1'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="subheading">Sub-Heading1</label>
                    <input type="text" class="form-control" id="subheading" name="subheading1" value="<?= $kontak['subheading1'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="subheading">Whatsapp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?= $kontak['whatsapp'] ?>">
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
			
			<!-- /.row -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
