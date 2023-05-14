<?php

require_once 'dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$produk = $st->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="container px-5 my-5">
                    <form id="contactForm" action="proses_produk.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="kode">Kode</label>
                            <input class="form-control" name="kode" id="kode" type="text" value="<?= $produk['kode'] ?>"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="kode:required">Kode is required.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="produk">Nama Produk</label>
                            <input class="form-control" name="nama" id="produk" type="text"
                                value="<?= $produk['nama'] ?>" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="produk:required">Nama Produk is
                                required.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="harga">Harga </label>
                            <input class="form-control" name="harga" id="harga" type="text"
                                value="<?= $produk['harga'] ?>" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="harga:required">Harga is required.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="stok">Stok</label>
                            <input class="form-control" name="stok" id="stok" type="text" value="<?= $produk['stok'] ?>"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="stok:required">Stok is required.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jenisProduk">Jenis Produk</label>
                            <?php

                            $sql = "SELECT * FROM jenis_produk";
                            $rs = $dbh->query($sql);

                            ?>

                            <select class="form-select" name="jenis_produk" id="jenisProduk" aria-label="jenisProduk"
                                data-sb-validations="required">
                                <option selected>Pilih Jenis Produk</option>
                                <?php
                                foreach ($rs as $row) :
                                ?>
                                <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                            <div class="invalid-feedback" data-sb-feedback="jenisProduk:required">Jenis Produk is
                                required.</div>

                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <div class="d-grid">
                            <input type="hidden" value="<?= $produk['id'] ?>" name="id">
                            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
                        </div>
                    </form>
                </div>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            </div>
        </div>
    </div>
</body>

</html>