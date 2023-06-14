<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 4 </h1>
    <p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>
    <h2></h2>
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
