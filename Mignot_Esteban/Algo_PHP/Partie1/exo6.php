<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 6</h1>
    <p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>
    <h2>Le total TTC est de 59.94 €</h2>
</body>
</html>


<!-- ***********php******* -->
<?php


    // taux de tva
$tauxTVA = 0.20;
 // nombre d'articles
$nbArticles = 5;
 // Prix hors taxe
$prixHT = 9.99;
 // facture a regler avec les parametre precedent 
$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
echo "Le total TTC est de $totalTTC €<br>";


?>
