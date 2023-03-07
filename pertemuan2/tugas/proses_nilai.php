<?php

if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $pratikum = $_GET['praktikum'];
    $nilai_rata = ($uts + $uas + $pratikum) / 3;

    if ($nilai_rata <= 35) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : $nilai_rata<br>";
        echo "Grade Nilai : E <br>";
        echo "Predikat Nilai : Sangat Kurang";
    }elseif ($nilai_rata <= 55) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : $nilai_rata<br>";
        echo "Grade Nilai : D <br>";
        echo "Predikat Nilai : Kurang";
    }elseif ($nilai_rata <= 69) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : $nilai_rata<br>";
        echo "Grade Nilai : C <br>";
        echo "Predikat Nilai : Cukup";
    }elseif ($nilai_rata <= 84) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : $nilai_rata<br>";
        echo "Grade Nilai : B <br>";
        echo "Predikat Nilai : Memuaskan";
    }elseif ($nilai_rata <= 100) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : $nilai_rata<br>";
        echo "Grade Nilai : A <br>";
        echo "Predikat Nilai : Sangat Memuaskan";
    }else {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/Pratikum : $pratikum <br>";
        echo "Nilai Rata-rata : $nilai_rata<br>";
        echo "Grade Nilai : I <br>";
        echo "Predikat Nilai : Tidak Ada";
    }


    if ($nilai_rata > 55) {
        echo "<br>Selamat Kamu Lulus";
    } else {
        echo "<br>Kamu tidak Lulus";
    }
    
    
}else{
    echo "Tidak Ada Data";
}