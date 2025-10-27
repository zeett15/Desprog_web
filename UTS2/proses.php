<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$utusan = isset($_POST['utusan']) ? trim($_POST['utusan']) : '';
$tgl_lahir = isset($_POST['tgl_lahir']) ? trim($_POST['tgl_lahir']) : '';
$berat = isset($_POST['berat']) ? trim($_POST['berat']) : '';
$tinggi = isset($_POST['tinggi']) ? trim($_POST['tinggi']) : '';
$jk = isset($_POST['jk']) ? trim($_POST['jk']) : '';
$kategori = isset($_POST['kategori']) ? trim($_POST['kategori']) : '';
$hp = isset($_POST['hp']) ? trim($_POST['hp']) : '';
$motivasi = isset($_POST['motivasi']) ? trim($_POST['motivasi']) : '';

if ($nama === '' || $utusan === '' || $tgl_lahir === '' || $berat === '' || $tinggi === '' || $jk === '' || $kategori === '' || $hp === '' || $motivasi === '') {
    echo json_encode(['success' => false, 'error' => 'data tidak lengkap']);
    exit;
}

$ts = strtotime($tgl_lahir);
if ($ts === false) {
    echo json_encode(['success' => false, 'error' => 'tanggal tidak valid']);
    exit;
}
$year = intval(date('Y', $ts));
if ($year < 1995 || $year > 2008) {
    echo json_encode(['success' => false, 'error' => 'tahun lahir di luar batas']);
    exit;
}

if (!isset($_SESSION['peserta_list']) || !is_array($_SESSION['peserta_list'])) {
    $_SESSION['peserta_list'] = [];
}

foreach ($_SESSION['peserta_list'] as $exist) {
    if (isset($exist['nama']) && mb_strtolower(trim($exist['nama'])) === mb_strtolower($nama)) {
        echo json_encode(['success' => false, 'error' => 'exists']);
        exit;
    }
}

$peserta = [
    'nama' => $nama,
    'utusan' => $utusan,
    'tgl_lahir' => $tgl_lahir,
    'berat' => $berat,
    'tinggi' => $tinggi,
    'jk' => $jk,
    'kategori' => $kategori,
    'hp' => $hp,
    'motivasi' => $motivasi,
    'waktu' => date('c')
];

$_SESSION['peserta_list'][] = $peserta;

echo json_encode(['success' => true, 'peserta' => $peserta]);
exit;
?>
