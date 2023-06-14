<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 2 </h1>
    <p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.</p>
    <h2>Pays	Capitale
ALLEMAGNE	Berlin
FRANCE	Paris
ITALIE	Rome
USA	Washington</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

function afficherTableHTML() {
    $capitales = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome"
    );

    asort($capitales);

    echo "<table>";
    echo "<tr><th>Pays</th><th>Capitale</th></tr>";

    foreach ($capitales as $pays => $capitale) {
        $paysMajuscules = strtoupper($pays);
        echo "<tr><td>$paysMajuscules</td><td>$capitale</td></tr>";
    }

    echo "</table>";
}

afficherTableHTML();



?>
