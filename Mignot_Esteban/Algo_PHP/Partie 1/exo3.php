<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <p>A  partir  de  la  phrase  de  l’exercice  1,  écrire  l’instruction  permettant  de  remplacer  le  mot «aujourd’hui» par le mot «demain». Afficher l’ancienne et la nouvelle phrase.</p>
    <h2>La phrase devient Notre formation DL commence demain.
    La phrase était Notre formation DL commence aujourd'hui.
</h2>
</body>
</html>


<!-- ***********php******* -->
<?php
// *********.str_reeplace()permet de changer un mot par un autre*******

$Maphrase = "Notre formation DL commence aujourd'hui";
$Maphrase_remplacer = str_replace("aujourd'hui","demain",$Maphrase);
echo "La phrase devient $Maphrase_remplacer. <br>"; 
echo "La phrase était $Maphrase. <br>"; 