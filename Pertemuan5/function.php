<?php
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo "$salam, ";
        echo "Perkenalkan, nama saya $nama <br>";
        echo "Senang berkenalan dengan anda <br>";
    }

    perkenalan("Hamdana", "Halo");
    echo "<br>";

    $saya = "Elok";
    $ucapansalam = "Selamat Pagi";
    perkenalan($saya, $ucapansalam);

    echo "<br>";
    
    perkenalan($saya);
?>