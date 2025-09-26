
<?php
$nilaiSiswa = [85, 92,78,64,90,55,88,79,70,96];

$nilaiLulus = [];

foreach($nilaiSiswa as $nilai){
    if ($nilai >=70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ' , $nilaiLulus) . "<br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob' , 3],
    ['Cahrlie', 9],
    ['David',5],
    ['Eva', 6]
];

$KaryawanPengalamanLimaTahun = [];

foreach($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $KaryawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ' , $KaryawanPengalamanLimaTahun);


$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ]
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

$nilaiMtk = [
    ['Alice', 85],
    ['Bob' , 92],
    ['Cahrlie', 78],
    ['David',64],
    ['Eva', 90]
];


$totalNilai = 0;
$jumlah = count($nilaiMtk);

foreach ($nilaiMtk as $nilai){
    $totalNilai += $nilai[1];
}

$rataRata = $totalNilai / $jumlah;
echo "<br>List siswa yang memiliki nilai di atas rata-rata dengan rata-rata $rataRata adalah: <br>";
foreach($nilaiMtk as $nilai){
    if($nilai[1] < $rataRata){
        continue;
    }
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
?>