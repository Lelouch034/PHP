<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>
    <h2>La phrase contient 5 mots</h2>
</body>
</html>


<!-- ***********php******* -->
<?php
// *********.str_word_count()permet de compter le nombre de mots*******
$Maphrase = "Notre formation DL commence aujourd'hui";
echo "La phrase contient ".str_word_count($Maphrase)." mots<br>";

?>
