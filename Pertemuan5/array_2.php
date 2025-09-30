<!DOCTYPE html>
<html>
    <head>        
    </head>
    <body>
        <div style="background-color: pink;"> 
            <?php
            $Dosen = [
                'Nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            echo "Nama: {$Dosen ['Nama']} <br>";
            echo "Domisili {$Dosen ['domisili']} <br>";
            echo "Jenis Kelamin: {$Dosen ['jenis_kelamin']} <br>";
        ?>
        </div>
        
    </body>
</html>