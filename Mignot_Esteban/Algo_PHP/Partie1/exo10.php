<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 10 </h1>
    <p>A partiree en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>
    <h2>Rendu de monnaie : Billets de 10 € : 1</h2>
</body>
</html>


<!-- ***********php******* -->
<?php


function rendreMonnaie($montantTotal, $sommeVerse) {
    $rendu = $sommeVerse - $montantTotal;
    
    $billets10 = 0;
    $billets5 = 0;
    $pieces2 = 0;
    $pieces1 = 0;
    
    if ($rendu >= 10) {
        $billets10 = (int)($rendu / 10);
        $rendu %= 10;
    }
    
    if ($rendu >= 5) {
        $billets5 = (int)($rendu / 5);
        $rendu %= 5;
    }
    
    if ($rendu >= 2) {
        $pieces2 = (int)($rendu / 2);
        $rendu %= 2;
    }
    
    if ($rendu >= 1) {
        $pieces1 = $rendu;
    }
    
    echo "Rendu de monnaie :\n";
    
    if ($billets10 > 0) {
        echo "Billets de 10 € : " . $billets10 . "\n";
    }
    
    if ($billets5 > 0) {
        echo "Billets de 5 € : " . $billets5 . "\n";
    }
    
    if ($pieces2 > 0) {
        echo "Pièces de 2 € : " . $pieces2 . "\n";
    }
    
    if ($pieces1 > 0) {
        echo "Pièces de 1 € : " . $pieces1 . "\n";
    }
}

$montantAPayer = 10;
$sommeVerse = 20;

rendreMonnaie($montantAPayer, $sommeVerse);

?>

