<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title ?></h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
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
              <h3 class="card-title">Form <?=  $title ?></h3>
            </div>
            <div class="row">
              <div class="col">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default" style="margin: 10px;">Tambah</button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Undangan</th>
                    <th>Image</th>
                    <th>Paket</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($demoundangan as $demoundangan ) { ?>
                  <tr>
                    <td><?= $demoundangan['id_undangan'] ?></td>
                    <td><?= $demoundangan['nama_undangan'] ?></td>
                    <td><img width="100px" src="<?= base_url('assets/user/img/template/'.$demoundangan['image']) ?>" alt=""></td>
                    <td><?= $demoundangan['paket'] ?></td>
                    <td><?= $demoundangan['harga'] ?></td>
                    <td><a href="#" class="btn btn-primary">Ubah</a> <a href="#" class="btn btn-primary">Fitur</a> <a href="<?= base_url('admin/Undangan/hapusdemo/'. $demoundangan['slug']) ?>"
                        class="btn btn-danger">Hapus</a></td>
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

    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Demo Undangan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/Undangan/tambahdemo') ?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama">Nama Undangan</label>
            <input type="text" class="form-control" id="nama" name="nama">
            <?= form_error('nama', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
          </div>

          <div class="form-group">
            <label for="heading1">Foto Undangan</label>
            <input type="file" name="photo" id="photo" class="form-control">
            <?= form_error('foto', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
          </div>

          <div class="form-group">
            <label>Paket</label>
            <select class="form-control" name="paket">
              <option value="kenalan">Kenalan</option>
              <option value="reguler">Reguler</option>
              <option value="premium">Premium</option>
            </select>
          </div>

          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga">
            <?= form_error('harga', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
          </div>



      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
<?php if( $modal == 'true' ){
?>
$('#modal-default').modal('show');
<?php 
}
?>
</script>