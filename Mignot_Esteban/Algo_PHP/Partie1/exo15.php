<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo15</title>
</head>
<body>
    <h1>Exercice 15 </h1>
    <p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>
    <h2></h2>
</body>
</html>


<!-- ***********php******* -->
<?php

// Création de ma class 
//Properties
class Personne {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;

    //Methods je crois 

    public function __construct(string $nom, string $prenom, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom():string {
        return $this->prenom;
    }

    public function getDateNaissance():DateTime {
        return $this->dateNaissance;
    }

    public function getAge():int {
        $dateNaissance = $this->dateNaissance;
        $aujourdHui = new DateTime();
        $difference = $dateNaissance->diff($aujourdHui);
        return $difference->y;
    }

    //methode la plus rapide et facile 
    public function __toString(){
        return $this->prenom." ".$this->nom." a ".$this->getAge()." ans<br>";
    }
}

$p1 = new Personne("DUPONT", "Michel", "2000-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "2003-01-17");



echo "$p1 <br>";
echo $p2;


//marche mais beacucoup trop long pour rien il vaut mieux utilieé la 1er methode

//Afficher les informations de Michel
// echo "Nom : " . $p1->getNom() . "<br>";
// echo "Prénom : " . $p1->getPrenom() . "<br>";
// echo "Âge : " . $p1->getAge() . " ans<br>";

// echo "<br>";

// // Afficher les informations de Alice
// echo "Nom : " . $p2->getNom() . "<br>";
// echo "Prénom : " . $p2->getPrenom() . "<br>";
// echo "Âge : " . $p2->getAge() . " ans<br>";

// var_dump($p1->getAge());

?>
