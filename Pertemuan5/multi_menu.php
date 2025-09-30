<?php
    $menu =[
        [
            "nama" => "Beranda"
        ],
        [
            "nama" => "Berita",
            "subMenu" =>[
                [
                    "nama" => "Wisata",
                    "subMenu" => [
                        [
                            "nama" => "Pantai"
                        ],
                        [
                            "nama" => "Gunung"
                        ],
                        
                    ],
                    [
                        "nama" => "kuliner"
                    ],
                    [
                        "nama" => "Hiburan"
                    ]
                ],
                
            ],
        ],
        [
            "nama" => "Tentang"
        ],
        [
            "nama" => "kontak"
        ]
        
    ];


    function tampikanMenuBertingkat(array $menu){
        echo "<ul>";
        foreach ($menu as $item) {
            echo "<li>{$item['nama']}";
            if (isset($item['subMenu'])) {
            tampikanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
    }

    tampikanMenuBertingkat($menu);
?>