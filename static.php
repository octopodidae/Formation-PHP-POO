<?php

// Des constantes
define("VERSION", 1.2);
echo VERSION . "<br>";
define("FORCE_FAIBLE", 2);
echo FORCE_FAIBLE . "<br>";
define("FORCE_MOYENNE", 5);
echo FORCE_MOYENNE . "<br>";

class Combattant {
    
    const FORCE_FAIBLE = 2;
    const FORCE_MOYENNE = 5;
    const FORCE_ELEVEE = 9;
    
    public static $nb_combattant = 0;
    private $name;
    private $force;
    private static $devise = "Yo !";
    
    public static function getDevice() {
        return self::$devise;
    }
    
    public function __construct($name, $force) {
        $this->name = $name;
        $this->number = $force;
        self::$nb_combattant++;
    }
    
    public function afficheName() {
        echo $this->name . "<br>";
    }
        
}

$fighter = new Combattant("Bob", FORCE_FAIBLE);
$fighter2 = new Combattant("Léon", Combattant::FORCE_ELEVEE);
$fighter3 = new Combattant("Zak", Combattant::FORCE_FAIBLE);

$fighter->afficheName();

echo Combattant::FORCE_ELEVEE . "<br>";

// echo  $fighter->device(); // Erreur : on ne peut pas accéder à une propriété static depuis un objet

echo Combattant::getDevice() . "<br>";

echo "Nombre de combattants sur le ring : " . Combattant::$nb_combattant . "<br>";

?>