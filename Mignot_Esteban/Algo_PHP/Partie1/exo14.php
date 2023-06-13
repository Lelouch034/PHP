<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 14 </h1>
    <p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
    <h2>Âge : 19 ans, 5 mois, 29 jours</h2>
</body>
</html>


<!-- ***********php******* -->
<?php


$dateNaissance = '2003-12-15';
// DateTime() pour avoir la date
$dateActuelle = new DateTime();

$dateNaissance = new DateTime($dateNaissance);

// diff($dateNaissance); c'est juste pour définir a quoi va correspondre ma date 
$diff = $dateActuelle->diff($dateNaissance);

// et je difini ca ici avec diif-y etc
echo "Âge : " . $diff->y . " ans, " . $diff->m . " mois, " . $diff->d . " jours";
?>




