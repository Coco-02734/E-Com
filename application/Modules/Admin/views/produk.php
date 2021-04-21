<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left"><?= $title; ?></h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <?= $this->session->flashdata('message'); ?>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            <span class="pull-right"><a href="<?= base_url('admin/admin/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Tambah Produk</a></span>
                            <h3><i class="far fa-file-alt"></i> <?= $title; ?></h3>
                        </div>
                        <!-- end card-header -->

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 300px">Detail Produk</th>
                                            <th style="width:110px">Katagori</th>
                                            <th style="min-width:110px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($produk as $m) : ?>
                                            <tr>
                                                <td>
                                                    <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="<?= base_url('assets/') ?>img/<?php echo $m['gambar'] ?>" /></div>
                                                    <h4> <?php echo $m['nama_produk'] ?></h4>
                                                    <p>Rp <?php echo $m['harga'] ?></p>

                                                </td>
                                                <td>Jml Stok :
                                                    <span class="badge badge-pill badge-warning"><?php echo $m['stok'] ?>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i> Edit</a>
                                                    <a href="<?= base_url('admin/admin/hapus/') . $m['id_produk']; ?>" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- end card-body -->

                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->