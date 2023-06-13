<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 8 </h1>
    <p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:</p>
    <h2>0 x 5 = 0
    1 x 5 = 5
    2 x 5 = 10
    3 x 5 = 15
    4 x 5 = 20
    5 x 5 = 25
    6 x 5 = 30
    7 x 5 = 35
    8 x 5 = 40
    9 x 5 = 45
    10 x 5 = 50
</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

function table_de_multiplication($nombre = 5) {
    for ($i = 0; $i <= 10; $i++) {
        $multiplication = $nombre * $i;
        
        echo " $i x $nombre = $multiplication <br>";
    }
}table_de_multiplication($nombre = 5)

?>
