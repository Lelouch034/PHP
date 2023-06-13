<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales.</p>
    <h2>En euros cela donne 15.24</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

function convertionFRFenEuros() {
    $nombre_de_francs = 100;
    // <!-- ***********1euro = 6,55957 FRANCS ******* -->
    $taux_de_conversion = 6.55957;
    // <!-- ***********calcul pour la conversion ******* -->
    $euro = $nombre_de_francs / $taux_de_conversion;
    // <!-- ***********calcul pour la conversion ******* -->
    $aroud_euros = round($euro, 2);

    return $aroud_euros;
}
  $nombre_en_euros = convertionFRFenEuros();


echo " En euros cela donne  $nombre_en_euros";


?>
