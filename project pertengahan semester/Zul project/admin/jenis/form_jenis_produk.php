<?php

require_once '../dbkoneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="container px-5 my-5">
                    <form id="contactForm" action="proses_jenis_produk.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="nama_jenis">Nama Jenis</label>
                            <input class="form-control" name="nama" id="nama_jenis" type="text" placeholder="Nama Jenis" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="nama_jenis:required">Nama Jenis is
                                required.</div>
                        </div>
                        <div class="d-grid">
                            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                        </div>
                    </form>
                </div>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            </div>
        </div>
    </div>
</body>

</html>