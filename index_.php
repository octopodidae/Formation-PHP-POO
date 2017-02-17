<?php

    
    echo "<h1>Formation PHP POO</h1>";

    echo "<hr><h3>Approche procédurale</h3><hr>";

/*********************************************************/
                    /*approche procédurale*/
/*********************************************************/

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

/*********************************************************/
                    /*APPROCHE OO*/
/*********************************************************/    


    echo "<br><hr><h3>Approche OO</h3><hr>";

    
/*********************************************************/
                    /*CLASSE EQUIPE*/
/*********************************************************/   
    
    class Equipe {
        
        /**************** Propriétes / Attributs ****************/
        private $nom = "OL"; 
        public $logo;
        private $annee_de_creation; // La classe fille ne disposera pas de la propriété $nom
        protected $entraineur; // La classe fille disposera de la propriété $entraineur
        
               
        /**************** METHODES ****************/
        
        public function test() {
            return "simple test<br>";
            //return $nom;
        }
        
        public function getNom() { // getter (acecesseur), accès en lecture
            //return $nom; // Valable uniquement si on veut retourner une variable locale (propre à la fonction - scope)
            return $this->nom; //$this est une référence à la classe (à l'objet courant)
        }
        
        public function setNom($n) { // Mutateur (setter), accès en écriture
            $this->nom = $n;
        }
        
        public function getEntraineur() { // getter (acecesseur), accès en lecture
            return $this->entraineur; //$this est une référence à la classe (à l'objet courant)
        }
        
        public function setEntraineur($e) { // Mutateur (setter), accès en écriture
            $this->entraineur = $e;
        }

    }

    $realMadrid = new Equipe(); // objet instancié à partir de la classe Equipe
    $cskMoscou = new Equipe();

    echo gettype($cskMoscou) . "<br>";
    //echo $realMadrid->nom . "<br>";
    //echo $realMadrid->entraineur . "<br>";

    echo $realMadrid->getNom() . "<br>"; 

    $realMadrid->setNom("Real de Madrid");
    //echo $realMadrid->nom . "<br>";
    //echo $realMadrid->annee_de_construction . "<br>";
    //echo $realMadrid->entraineur . "<br>";
    
    echo $realMadrid->test();

    //echo $realMadrid->nom;
    echo $realMadrid->getNom() . "<br>"; 

    $realMadrid->setEntraineur("Zidane");
    echo "L'entraineur du " . $realMadrid->getNom() . " est " . $realMadrid->getEntraineur() . "<br>";

    $cskMoscou->setEntraineur("Bob");
    echo "L'entraineur du " . $cskMoscou->getNom() . " est " . $cskMoscou->getEntraineur() . "<br>";

/*********************************************************/
                    /*CLASSE JOUEUR*/
/*********************************************************/


  class Joueur {
      
      private $nom;
        
      /**************** CONSTRUCTEUR ****************/
        
        public function __construct($nom) {
            echo "__construct() éxécuté <br>";            
            $this->nom = $nom;
        }
      
      public function afficheNom () {
          echo $this->nom;
      }
        
        
    }

    echo "<hr>";

    $joueur1 = new Joueur("Léon");

    $joueur1->afficheNom();

    echo  "<hr>";

    
/*********************************************************/
                    /*HERITAGE*/
/*********************************************************/

    
/*********************************************************/
                    /*CLASSE EQUIPE FOOT*/
/*********************************************************/


    class EquipeFoot extends Equipe {
        // L'héritage n'est ici pas justifiée
    }

    $chelsea = new EquipeFoot();

    $chelsea->setNom("Chelsea");

    echo "Le nom de l'équipe de foot est " . $chelsea->getNom() . "<br><hr>";

/*********************************************************/
                    /*CLASSE SPORT*/
/*********************************************************/


    class Sport {
        
        private $nom;
        private $nb_joueurs;
        private $est_olympique;
        
        public function getNom() {
            return $this->nom;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function getNbJoueurs() {
            return $this->nb_joueurs;
        }

        public function setNbJoueurs($nb) {
            $this->nb_joueurs = $nb;
        }

        public function getEstOlympique() {
            return $this->est_olympique;
        }

        public function setEstOlympique($est_olympique) {
            $this->est_olympique = $est_olympique;
        }
    }

    
    $foot = new Sport();
    $foot->setNom("football");
    echo "Sport : " . $foot->getNom() . "<br>";
    $foot->setNbJoueurs(11);
    echo "Nb joueurs : " . $foot->getNbJoueurs() . "<br>";
    $foot->setEstOlympique(true);
    echo $foot->getEstOlympique() . "<br>";

    $hand = new Sport();
    $hand->setNom("handball");
    echo "Sport : " . $hand->getNom() . "<br>";
    $hand->setNbJoueurs(6);
    echo "Nb joueurs : " . $hand->getNbJoueurs() . "<br>";
    $hand->setEstOlympique(true);
    echo $hand->getEstOlympique() . "<br>";

    $footFlorentin = new Sport();
    $footFlorentin->setNom("foot florentin");
    echo "Sport : " . $footFlorentin->getNom() . "<br>";
    $footFlorentin->setNbJoueurs(11);
    echo "Nb joueurs : " . $footFlorentin->getNbJoueurs() . "<br>";
    $footFlorentin->setEstOlympique(false);
    echo $footFlorentin->getEstOlympique() . "<br>";

    
    $sports = array($foot, $hand, $footFlorentin);

    echo  "<pre>";    
    var_dump($sports);
    echo  "</pre>";


    echo "sizeof() : " . sizeof($sports) . "<br>";

    function afficheListeSports($sports, $estOlympique) {
        
        $listeHtml = "<ul color='blue'>";
        
        for($i = 0; $i<sizeof($sports); $i++) {

            if($sports[$i]->getEstOlympique() === $estOlympique) {   
                $listeHtml.= "<li color='blue'>" . $sports[$i]->getNom() . "</li>";
            }

        }
    
        $listeHtml .= "</ul>";
        echo $listeHtml;
    }

    afficheListeSports($sports, $estOlympique = true);
    afficheListeSports($sports, $estOlympique = false);

    $obj = new stdClass(); // stdClass = classe primitive (vide) permettant de créer un objet vide auquel on attribuera des propriétés
    echo "<p>" . gettype($obj) . "</p>";
    $obj->couleur = "rouge";
    $obj->forme="triangle";

    var_dump($obj);
    
   
?>