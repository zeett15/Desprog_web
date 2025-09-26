<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "$hasilTambah <br>";
echo "$hasilKurang <br>";
echo "$hasilKali <br>";
echo "$hasilBagi <br>";
echo "$sisaBagi <br>";
echo "$pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "$hasilSama <br>";
echo "$hasilTidakSama <br>";
echo "$hasilLebihKecil <br>";
echo "$hasilLebihBesar <br>";
echo "$hasilLebihKecilSama <br>";
echo "$hasilLebihBesarSama <br>"

, $a += $b;
echo $a . "<br>";
echo $b . "<br>";
$a -= $b;
echo $a . "<br>";
echo $b . "<br>";
$a *= $b;
echo $a . "<br>";
echo $b . "<br>";
$a /= $b;
echo $a . "<br>";
echo $b . "<br>";
$a %= $b;
echo $a . "<br>";
echo $b . "<br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo $hasilIdentik . "<br>";
echo $hasilTidakIdentik . "<br>";


$kursi = 45;

$sisaKursi = $kursi - 28;

echo "Sisa kursi pada malam itu sebanyak $sisaKursi";
?>