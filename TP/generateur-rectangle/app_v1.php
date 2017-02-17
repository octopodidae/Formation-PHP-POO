<?php

class Rectangle {
        
        
        public $couleur;
        public $hauteur;
        public $largeur;
        
        public function __construct($params) {
            
            //echo "je suis dans le construct <br>";
            $this->couleur = $params["couleur"];
            $this->hauteur = $params["hauteur"];
            $this->largeur = $params["largeur"];
            
        }
        
     public function genereDiv() {
         $css = "margin: 10px;";
         $css .= " width:" . $this->largeur ."px;";
         $css .= " height: " .$this->hauteur . "px;";
         $css .= " background-color:  " . $this->couleur;
         if ($this->hauteur === $this->largeur) {
               return "<div>la forme carré n'est pas autorisée </div>";
           } else {
            return "<div style='" . $css . "'></div>";
        }
        
     }
    
    }

   $nb = $_POST["nb"];

    for ($i = 0; $i < $nb; $i++) {
        $rectangle = new Rectangle($_POST);
        echo $rectangle->genereDiv();
    }
    
?>