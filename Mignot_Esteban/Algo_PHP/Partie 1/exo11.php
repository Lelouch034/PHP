<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 11 </h1>
    <p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>
    <h2>
        Il y a 3 marques de voitures dans le tableau Volvo
BMW
Toyota</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

$cars = array("Volvo", "BMW", "Toyota");

$nombre_element =  count($cars);

echo "Il y a $nombre_element marques de voitures dans le tableau ";

echo "$cars[0]<br>";
echo "$cars[1]<br>";
echo "$cars[2]<br>";

?>

