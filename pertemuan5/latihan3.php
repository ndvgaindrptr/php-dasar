<?php
$mahasiswa = [
    ["Nadia Vega", "043040023", "Rekayasa Perangkat Lunak", "nadiavega@gmail.com"],
    ["Lintang Sukma", "0430400234", "Rekayasa Perangkat Lunak", "lintangsukma@gmail.com"],
    ["Kevin Lie", "0430400287", "Multi Media", "Kevinlie@gmail.com"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
<ul>
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>NRP :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>Email :<?= $mhs[3]; ?></li>
</ul> 
<?php endforeach; ?>

        </body>
        </html>