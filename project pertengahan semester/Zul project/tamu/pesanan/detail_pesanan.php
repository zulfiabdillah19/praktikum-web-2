<?php

require_once '../dbkoneksi.php';

// Mendapatkan nilai id dari parameter GET
$_id = $_GET['id'];

// Membuat query SQL untuk mengambil data produk dengan id tertentu
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);

// Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
$st->execute([$_id]);

// Mengambil hasil query dan menyimpannya ke dalam variabel $row
$row = $st->fetch();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<div class="container m-5">
    <!-- Menampilkan data produk dalam bentuk tabel -->
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?= $row['id'] ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><?= $row['tanggal'] ?></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><?= $row['nama_produk'] ?></td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td><?= $row['nama_pemesan'] ?></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><?= $row['total_harga'] ?></td>
            </tr>
            <tr>
                <td>Qty</td>
                <td><?= $row['qty'] ?></td>
            </tr>
            <tr>
                <td>Alamat Pemesan</td>
                <td><?= $row['alamat_pemesan'] ?></td>
            </tr>
        </tbody>
    </table>

</div>