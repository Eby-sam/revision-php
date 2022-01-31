<!doctype html>
<html lang="fr">
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
            $a = 5;
            $b = 8;
            $c = "bonjoir";
            $d = "lesjens";

            if($a === 5 && $b === 8) {
                echo "a et b son OK" . "<br>";
            }

            else {
                echo 'rien ne va plus';
            }

            if($c === "boujoir" && $d === "lesjens") {
                echo "c et d sont ok aussi";
            }

            else {
                echo "coucou , ça va pas !!!";
            }
        ?>
    </div>
    <div>
        <?php
            $i = 0;
            while ($i < 10) {
                echo "la variable i vaut $i <br>";
                $i++;
            }
        ?>
    </div>

</body>
</html>
