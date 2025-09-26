<?php
$nilaiNumerik = 92;

if($nilaiNumerik >=90 && $nilaiNumerik <=100){
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >=80 && $nilaiNumerik <90){
    echo "Nilai huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
}elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer" . "<br>" ;

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>"; 


$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "nilai: $nilai (Lulus) <br>";
}

$nilaiSiswa2 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$jumlah = 0;
foreach ($nilaiSiswa2 as $nilai){

    if ($nilai >= 70 && $nilai <= 92){
        for($i = 0; $i <= $nilai; $i++){
            $totalNilai += $nilai;
            $jumlah++;
        }
    }
}
$rataRata = $totalNilai / $jumlah;

echo "Rata rata nilai dengan mengabaikan dua nilai terendah dan tertinggi adalah: $rataRata <br>";

$hargaAwal = 120000;
$diskon = 0.2;
if($hargaAwal > 100000){
    $total = $hargaAwal - ($hargaAwal * $diskon);
    echo "Harga produk setelah di diskon 20% adalah: $total <br>";
}

$poin = 650;

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah? " . $hadiah = ($poin > 500) ? "YA" : "TIDAK";

?>