<?php

header('Content-Type: application/json; charset=utf-8');

if (isset($_SESSION['peserta_list'])) {
    unset($_SESSION['peserta_list']);
}

echo json_encode(['success' => true]);
exit;
?>
