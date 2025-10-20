<?php
// file sederhana untuk menghapus daftar peserta di session
session_start();
header('Content-Type: application/json; charset=utf-8');

// hapus array peserta
if (isset($_SESSION['peserta_list'])) {
    unset($_SESSION['peserta_list']);
}

// kembalikan respon JSON
echo json_encode(['success' => true]);
exit;
?>