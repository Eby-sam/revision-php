<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $monNombre = 6 * 8;
            echo $monNombre;
            echo "mon nombre est " . $monNombre;
        ?>
    </div>
    <div>
        <?php
            $nombre1 = 5;
            $nombre2 = 10;

            $total1 = $nombre1 + $nombre2;
            echo $total1;
            $total2 = $nombre1 - $nombre2;
            echo $total2;
            $total3 = $nombre1 * $nombre2;
            echo $total3;
            $total4 = $nombre1 / $nombre2;
            echo $total4;
            $total5 = $nombre1 % $nombre2;
            echo $total5;
            $total6 = $nombre1 ** $nombre2;
            echo $total6 ."<br>";

            $spaceship = 5 <=> 6;
            echo $spaceship;
        ?>

    </div>
</body>
</html>
