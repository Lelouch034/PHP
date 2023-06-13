<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 9 </h1>
    <p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).</p>
    <h2>La personne est imposable</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

$age = 32; 
$sexe = "F";

if($age >= 18 and $age <= 32 and $sexe === "F" ) {
    echo "La personne est imposable";
}else {
    echo "La personne n'est pas imposable";
}

?>

