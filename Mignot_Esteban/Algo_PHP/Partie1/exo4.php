<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
    <h2>C'est un palindrome 
        Engage le jeu que je le gagne </h2>
</body>
</html>


<!-- ***********php******* -->
<?php

function palindrome ($Maprase) {
    
    $Maprase = str_replace(' ', '', $Maprase);

    $Maprase = strtolower($Maprase);

    $reverse = strrev($Maprase);

    if ($Maprase === $reverse) {
        echo "<p>c'est un palindrome</p>";
    } 
    else {
        echo "</p>Ce n'est pas un  Palindrome</p>";
    }

    echo $Maprase;
}

$Maprase = "Engage le jeu que je le gagne";
palindrome($Maprase);

?>

