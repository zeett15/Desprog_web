<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10*5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

$nilaiMatematika = 5.1;
$nilaiIpa = 6.7;
$nilaiBahasaIndonesia = 9.3;

$ratarata = ($nilaiBahasaIndonesia + $nilaiIpa + $nilaiMatematika)/3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIpa} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$ratarata} <br>";

var_dump($ratarata);

echo "<br>";
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br>";

$namaDepan = "Ibnu";
$namaBelakang = 'jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . '' .$namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang ' . $namaBelakang . '<br>';

echo $namaLengkap ;
echo "<br>";

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Febri"];
echo $listMahasiswa[0];

?>