<?php
// pertemuan 2 - php dasar 
// sintaks php 

// standar output
// echo, print
// print_r (mencetak isi array)
// var_dump (untuk melihat isi)

// penulisan sintaks php
// 1. php didalam html
// 2. html didalam php

// variabel dan tipe data
// variabel 
// tidak boleh diawali dengan angka tapi boleh mengandung angka
// $nama = "imron";
// contoh:
// echo "halo , nama saya $nama " 
// operator
// aritmatika 
// + - * / %
// $y = 10;
// $x = 10;
// echo $x * $y;

// Penggabungan string / concatenation / concat
// . 
// $nama_depan = "imron";
// $nama_belakang = "m";
// echo $nama_belakang . "" . $nama_depan;
//  Assigment 
// =, +=, -=, *=, /=, %=, .= <-- untuk melanjutkan / menggabungkan variabel sebelumnya
// $x = 90;
// $x -= 10;
// echo $x; 
// $nama = "imron";
// $nama .= "";
// $nama .= "";
// echo $nama;

//  Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1==1);

// // identitas
// //  ===, !==, 
// var_dump(1 === "1");

//  logika
// &&, ||, !
$x = 30;
var_dump($x <20 || $x % 2 == 0)
?>