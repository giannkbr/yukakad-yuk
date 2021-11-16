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
            <?php foreach ($paket as $paket ) { ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Paket <?= $paket['nama_gruppaket'] ?> </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama Fitur</th>
                                <th>Tersedia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($fiturpaket as $fitur ) { if ($paket['id_gruppaket'] == $fitur['id_gruppaket']) { ?>
                            <tr>
                                <td><?= $fitur['nama_fitur'] ?></td>
                                <td><?php if ($fitur['tersedia'] == 1) {
                                    echo 'Tersedia';
                                } else {
                                    echo 'Tidak';
                                } ?></td>
                            </tr>
                            <?php }} ?>

                        </tbody>

                    </table>
                </div>
            </div>
            <?php } ?>
            <!-- /.card -->

            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>