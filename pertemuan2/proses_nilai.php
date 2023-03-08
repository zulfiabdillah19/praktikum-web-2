<<<<<<< HEAD
<?php
if (isset($_GET['submit'])) {
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$praktikum = $_GET['praktikum'];

echo "Nama: $nama <br>";
echo "Mata Kuliah: $matkul <br>";
echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Praktikum: $praktikum";
} else {
    echo "Tidak ada data!";
=======
<?php
if (isset($_GET['submit'])) {
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$praktikum = $_GET['praktikum'];

echo "Nama: $nama <br>";
echo "Mata Kuliah: $matkul <br>";
echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Praktikum: $praktikum";
} else {
    echo "Tidak ada data!";
>>>>>>> a6356a07cf368e68eb35b04eef3260999ce037eb
}