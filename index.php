<?php

    
    echo "<h1>Formation PHP POO</h1>";

    echo "<hr><h3>Approche procédurale</h3><hr>";

    // approche procédurale

function creeEquipe($nom, $logo, $annee) {
        
        $equipe = array (
    
            "nom" => $nom,
            "logo" => $logo,
            "annee_de_creation" => $annee
    
         );
        
        return $equipe;

    }

    $psg = creeEquipe("PSG", "", 1970);
    $juventus = creeEquipe("Juventus", "", 1897);
    $arsenal = creeEquipe("Arsenal", "", 1886);

    //echo gettype($equipe) . "<br>";

    //echo $equipe["nom"] . "<br>";

    echo "La Juve a été fondée en " . $juventus["annee_de_creation"] . "<br>";

    foreach($psg as $k => $v) {
        
        echo  $k . " => " . $v . "<br>";
        
    }

    // approche OO

    echo "<br><hr><h3>Approche OO</h3><hr>";

    class Equipe {
        
        // Propriétes / Attributs    
        private $nom = "OL"; 
        public $logo;
        private $annee_de_creation; // La classe fille ne disposera pas de la propriété $nom
        protected $entraineur; // La classe fille disposera de la propriété $entraineur
        
        /**************** METHODES ****************/
        
        public function test() {
            return "simple test<br>";
            //return $nom;
        }
        
        public function getNom() {
            //return $nom; // Valable uniquement si on veut retourner une variable locale (propre à la fonction - scope)
            return $this->nom; //$this est une référence à la classe (à l'objet courant)
        }

    }

    $realMadrid = new Equipe(); // objet instancié à partir de la classe Equipe
    $cskMoscou = new Equipe();

    echo gettype($cskMoscou) . "<br>";
    //echo $realMadrid->nom . "<br>";
    //echo $realMadrid->entraineur . "<br>";

    //$realMadrid->nom = "Real de Madrid";
    //echo $realMadrid->nom . "<br>";
    //echo $realMadrid->annee_de_construction . "<br>";
    //echo $realMadrid->entraineur . "<br>";
    
    echo $realMadrid->test();

    //echo $realMadrid->nom;
    echo $realMadrid->getNom(); 
    



?>