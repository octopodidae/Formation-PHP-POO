<?php

class Rectangle {
        

    public $couleur;
    public $hauteur;
    public $largeur;

    public function __construct($params) {

        $this->hauteur = $params["hauteur"];
        $this->largeur = $params["largeur"];
        
        if ($params["couleur"] == 0) {
            $this->couleur = $this->couleurAleatoire();
        } else {
            $this->couleur = $params["couleur"];
        }
        
        //$this->couleur =($params["couleur"] === 0) ? $this->couleurAleatoire() : $params["couleur"];
        
        if ($this->estCarre()) {
            throw new Exception("la forme carrée n'est pas autorisée <br>");
        }

    }
    
    private function estCarre() {
        return $this->hauteur === $this->largeur;
    }
        
    public function genereDiv() {
        $css = "margin: 10px;";
        $css .= " width:" . $this->largeur ."px;";
        $css .= " height: " .$this->hauteur . "px;";
        $css .= " background-color:  " . $this->couleur;
        return "<div style='" . $css . "'></div>";
    }
    
    private function couleurAleatoire() {
        $couleurs = array("red", "orange", "green", "blue", "#f766f7", "purple", "#80ff00");
        $index = rand(0, sizeof($couleurs) - 1);
        return $couleurs[$index];
        
    }
    
}

   $nb = $_POST["nb"];

    for ($i = 0; $i < $nb; $i++) {
        try {
            $rectangle = new Rectangle($_POST);
            echo $rectangle->genereDiv();
        } catch (Exception $e){
            echo $e->getMessage();
            break;
        }
    }
    
?>