<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 12 </h1>
    <p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)</p>
    <h2>Salut Gregory
        Hello Pierre
        Hola Lucas
</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

$formateurs = [
    "Salut" => "Gregory",
    "Hello" => "Pierre",
    "Hola" => "Lucas"
];

foreach($formateurs as $key => $value) {
    echo "$key  $value <br>" ;
  }



?>