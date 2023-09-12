<?php
// $_GET
$mahasiswa = [  
 [
    "nama"=>"Nadia Vega Indira Putri",
    "nrp" =>"042330400",
    "email" =>"nadiavega@gmail.com",
    "jurusan" =>"Rekayasa Perangkat Lunak",
    "gambar" =>"nadiav.jpg"
 ],
 [
    "nama"=>"Kevin Lie",
    "nrp" =>"042330400",
    "email" =>"kevinlie@gmail.com",
    "jurusan" =>"Multi Media",
    "gambar" =>"kepinli.jpg",
 ]
];
?>
<!DOCTYPE  html>
<html>
<head>
    <title>$_GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) :?>
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>                                              
        </li>


    <?php endforeach; ?>
    </ul>