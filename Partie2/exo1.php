<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 1 </h1>
    <p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
    caractère passée en argument en majuscules et en rouge.</p>
    <h2>MON TEXTE EN PARAMETRE</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

function convertirMajRouge($texte) {

    echo strtoupper($texte);

}convertirMajRouge("Mon texte en parametre")

?>
