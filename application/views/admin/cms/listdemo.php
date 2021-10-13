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



			 <!-- /.row -->
             <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <div class="row">
                <div class="col">
                <a href="#" class="btn btn-primary" style="margin: 10px;">Tambah</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Link Demo</th>
                      <th>Link Harga</th>
                      <th>Foto</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($listdemo as $listdemo ) { ?>
                    <tr>
                      <td><?= $listdemo['id_listdemo'] ?></td>
                      <td><?= $listdemo['nama_listdemo'] ?></td>
                      <td><?= $listdemo['link_harga'] ?></td>
                      <td><?= $listdemo['image'] ?></td>
                      <td><a href="#" class="btn btn-primary">Ubah</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
