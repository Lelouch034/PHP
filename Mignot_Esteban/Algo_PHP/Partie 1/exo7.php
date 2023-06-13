<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:</p>
    <h2>l'enfant qui 10 ans appartient à la catégorie Minime</h2>
</body>
</html>


<!-- ***********php******* -->
<?php

$age = 6;

if($age === 6 || $age === 7 ) {
    echo " l'enfant qui $age ans appartient à la catégorie  Poussin";
} elseif($age === 8 || $age === 9){
    echo "  l'enfant qui $age ans appartient à la catégorie Pupille";
}elseif($age === 10 || $age === 11){
    echo  " l'enfant qui $age ans appartient à la catégorie Minime";
}elseif($age >= 12){
    echo " l'enfant qui $age ans appartient à la catégorie Cadet";
}else {
    echo "$age ne correspond a aucune catégorie";
}


?>

