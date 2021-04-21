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


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-file-alt"></i> <?= $title; ?></h3>
                        </div>
                        <!-- end card-header -->

                        <div class="card-body col-lg-8">
                            <?= form_open_multipart('admin/admin/upload') ?>
                            <div class="form-group">
                                <label for="nama">Nama Produk</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga </label>
                                <input type="number" class="form-control" id="harga" name="harga">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" class="form-control" id="stok" name="stok">
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-download"></i> Gambar</h3>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="foto" id="foto">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Upload</button>
                            </form>
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