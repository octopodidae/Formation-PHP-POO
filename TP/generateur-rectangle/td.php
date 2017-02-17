<?php


   class Rectangle {
        
        private $hauteur;
        private $largeur;
        private $couleur;
        
        public function __construct($params) {
            
            $this->hauteur = $params['hauteur'];
            $this->largeur = $params['largeur'];
            $this->couleur = $params['couleur'];
            
        }
        
        public function getCouleur() {
            return $this->couleur;
        }
        
              
        public function getHauteur() {
            return $this->hauteur;
        }
        
              
        public function getlargeur() {
                      
            return $this->largeur;
        }
       
       public function genereDiv() {
           
            $css = "margin: 10px;";
            $css.= " width:" . $this->getLargeur() . "px;";
            $css.= " height:" . $this->getHauteur() . "px;";
            $css.= " background-color:" . $this->getCouleur();
           
           if ($this->getlargeur() === $this->getHauteur()) {
               return "<div>la forme carré n'est pas autorisée </div>";
           } else {
                return "<div style='" . $css . "'>" ."</div>";
               }
           
       }
       
       /*public function carrePasAutorise() {
           if ($this->getlargeur() === $this->getHauteur()) {
               
               echo "Les carres ne sont pas autorisés <br>";
               die();
           }
         }*/
               
    }

    
    /*echo "<p>ok</p><pre>";    
    var_dump($_POST);
    echo "</pre>";*/    
    
    $nb_rectangles = $_POST["rectangles"]["nombre"];
    //echo $nb_rectangles;

    for ($i = 0; $i<$nb_rectangles; $i++) {
        $rectangle = new Rectangle($_POST["rectangles"]);
        //$rectangle->carrePasAutorise();
        echo $rectangle->genereDiv();
        //echo $rectangle->getCouleur();
    }

    


?>