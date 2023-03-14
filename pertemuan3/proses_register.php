<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$gender = $_POST['gender'];
$skill = $_POST['skil'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

function skor_skill($skill)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'Java script' => 20,
        'RWD Bootsrap' => 20,
        'PHP' => 20,
        'Python' => 30,
        'Java' => 50,
    ];
    $result = 0; 
    foreach ($skill as $skill) {
        $result = $result + $skill_list[$skill];
    }

    return $result;
}

function kategori_skill($skill)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'Java script' => 20,
        'RWD Bootsrap' => 20,
        'PHP' => 20,
        'Python' => 30,
        'Java' => 50,
    ];
    $result = 0; 
    foreach ($skill as $skill) {
        $result = $result + $skill_list[$skill];
    }

    
        if ($result >= 100 ) {
            $result = "Sangat Baik";
        } elseif ($result >= 60) {
            $result = "Baik";
        } elseif ($result >= 40) {
            $result = "Cukup";
        } elseif ($result >= 0) {
            $result = "Kurang";
        } else {
            $result = "Tidak Memandai";
        }
    return $result;
}


echo "NIM: $nim";
echo "<br> Nama: $nama";
echo "<br> Program Studi: $prodi";
echo "<br> Jenis Kelamin: $gender";
echo "<br> Skill Programming: ";
foreach ($skill as $skil) {
    echo $skil . ", ";
}
echo "<br>Skor Skill : " . skor_skill($skill);
echo "<br>Kategori Skill: " . kategori_skill($skill);
echo "<br> Tempat Domisili: $domisili";
echo "<br> Email: $email";



?>