<?Php

include_once 'template/topbar.php';
include_once 'template/sidebar.php';
require_once 'dbkoneksi.php';

// select all data from table "produk"
$sql = "SELECT * FROM pesanan";
// execute the query
$rs = $dbh->query($sql);

?>
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2>Selamat Datang Di Halaman Pesanan</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
            </ol>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <a href="pesanan/form_pesanan.php" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah
            </a>
            <br>
            <div class="card shadow mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Produk</th>
                            <th>Nama Pemesan</th>
                            <th>QTY</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($rs as $row) :
                        ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <?= $row['tanggal'] ?>
                            </td>
                            <td>
                                <?= $row['nama_produk'] ?>
                            </td>
                            <td>
                                <?= $row['nama_pemesan'] ?>
                            </td>
                            <td>
                                <?= $row['qty'] ?>
                            </td>
                            <td>
                                <?= $row['total_harga'] ?>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="pesanan/detail_pesanan.php?id=<?= $row['id'] ?>" class="">
                                            <i class="fas fa-info text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->

<?php
include_once 'template/footer.php';
?>