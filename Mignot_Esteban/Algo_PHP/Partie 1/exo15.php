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
    private $nom;
    private $prenom;
    private $dateNaissance;

    //Methods je crois 

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdHui = new DateTime();
        $difference = $dateNaissance->diff($aujourdHui);
        return $difference->y;
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

// Afficher les informations de Michel
echo "Nom : " . $p1->getNom() . "<br>";
echo "Prénom : " . $p1->getPrenom() . "<br>";
echo "Âge : " . $p1->getAge() . " ans<br>";

echo "<br>";

echo "Nom : " . $p2->getNom() . "<br>";
echo "Prénom : " . $p2->getPrenom() . "<br>";
echo "Âge : " . $p2->getAge() . " ans<br>";

?>
