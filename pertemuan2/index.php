<?php
//Pertemuan 2 - PHP Dasar
//Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Nadia Vega";
// echo "Halo, nama saya $nama';

// Operator 
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x + $y;

// Penggabung string / concatenation / concat
// . 
// $nama_depan = "Nadia";
// $nama_belakang = "Vega";
// echo $nama_depan . " " . $nama_belakang;

//Assignment
// =, +=, -+, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x; 
// $nama .= " ";
// $nama .= "Nadia Vega";p
// echo $nama;

// Perbandingan 
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1")

// Logika 
// &&, ||, !
$x = 30;
var_dump($x < 20 && $x % 2 == 0)
?>