<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 13 </h1>
    <p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>
    <h2>La moyenne générale de l'élève est de 11.22</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

$notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);

$additioner = array_sum($notes);

$nombre = count($notes);

$calcul = $additioner / $nombre;

$moyenne = round($calcul, 2);

echo "La moyenne générale de l'élève est de $moyenne";

?>
