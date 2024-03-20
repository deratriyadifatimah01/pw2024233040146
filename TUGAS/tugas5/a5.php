<?php

$mahasiswa = [
    [
        "nama" => "Dera Triyadi Fatimah",
        "nrp" => "233040146",
        "email" => "dera.233040146@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Fitriyani Rahmadini",
        "nrp" => "233040120",
        "email" => "fitriyani.233040120@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Zeina Qurotun Nisa",
        "nrp" => "233040144",
        "email" => "zeina.233040144@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Radhia Majdi Syadzwan",
        "nrp" => "233040128",
        "email" => "radhia.233040128@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Novan Ramanda Putra",
        "nrp" => "233040143",
        "email" => "novan.233040143@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Roy Martin",
        "nrp" => "233040130",
        "email" => "roy.233040130@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Azhar Nuttaqien",
        "nrp" => "233040134",
        "email" => "azhar.233040134@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Azmi Rohmatullah",
        "nrp" => "233040121",
        "email" => "azmi.233040121@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Anandita Putri Salsabila Athaya",
        "nrp" => "233040118",
        "email" => "anandita.233040118@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],
    [
        "nama" => "Denis Setya Pradana",
        "nrp" => "233040148",
        "email" => "denis.233040148@mail.unpas.ac.id",
        "fakultas" => "Teknik",
        "prodi" => "Teknik Informatika"
    ],   

]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array Associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Fakultas : <?= $mhs["fakultas"]; ?></li>
            <li>Prodi : <?= $mhs["prodi"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>