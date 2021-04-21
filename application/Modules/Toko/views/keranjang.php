<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/keranjang/') ?>style.css">
    <script src="https://kit.fontawesome.com/b8176260d8.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Raski Pet Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('toko') ?>">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Kontak</a>
                </li>
            </ul>
            <style>
                .icon {
                    color: #fff;
                }
            </style>
            <?php if ($user) { ?>
                <a href="<?= base_url('toko/toko/keranjang'); ?>">
                    <i class="icon fas fa-shopping-cart"></i>
                    <span class="badge badge-success ml-2"><?= $jml_brg['jumlah']; ?></span>
                </a>
                <a href="<?= base_url('toko/toko/logout'); ?>">
                    <i class="icon fas fa-sign-in-alt ml-4"></i>
                </a>
            <?php } else { ?>
                <a id="sigin" data-toggle="modal" data-target="#exampleModal">
                    <i class="icon fas fa-sign-in-alt mr-4"></i>
                </a>
            <?php } ?>

        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">harga</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($keranjang as $a) : ?>

                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src="<?= base_url('assets/img/') . $a['gambar']; ?>" class="img-sm"></div>
                                                <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"><?= $a['nama_produk']; ?></a>

                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td><input type="number" value="<?= $a['jumlah'] ?>"></td>
                                        <td>
                                            <div class="price-wrap"> <var class="price">Rp <?= $a['total_harga']; ?></var> <small class="text-muted">Rp <?= $a['harga']; ?> </small> </div>
                                        </td>
                                        <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group"> <label>Punya Kupon ?</label>
                                <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total Harga:</dt>
                            <dd class="text-right ml-3">Rp <?= $jml['total_harga']; ?></dd>
                        </dl>

                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3"><strong><?= $jml['total_harga']; ?></strong></dd>
                        </dl>
                        <hr> <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true">Check Out</a> <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>