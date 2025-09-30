<?php
    $pesan = "saya arek malang";

    #ubah variabel pesan menjadi array dengan perintah explonde
    $pesanPerKata = explode(" ", $pesan);
    #ubah setiap kara dalam array menjadi kebalikannya
    $pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
    #gabungkan kembali array menjadi string
    $pesan = implode(" ", $pesanPerKata);

    echo $pesan . "<br>";
?>