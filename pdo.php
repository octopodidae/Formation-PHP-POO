<?php

try {    
    $db = new PDO("mysql:host=localhost; dbname=formation-php-poo; charset=utf8", "root"); 
    echo "It works ! <br>";
} catch(Excepion $e) {
    //echo $e->getMessage() . "<br>";
    die("Erreur : " . $e.getMessage() . "<br>");
}

// lecture et récupération des données
$reponse = $db->query("select * from equipe");
//var_dump($reponse);

while($equipe = $reponse->fetch(PDO::FETCH_OBJ)) {
    //var_dump($equipe);
    //echo "<p>" . $equipe["nom"] . "</p>"; // correcte si fetch() ou fetch(PDO::FETCH_ASSOC)
    echo "<p>" . $equipe->nom . "</p>";
}

//$db->closeCursor(); // fin du traitement

// insertion de données
/*$sql = "INSERT INTO equipe (nom, logo, annee_de_creation)";
$sql.= "VALUES('Arsenal', '', '1892')";
var_dump($db->query($sql));*/

$team = array(
    "nom" => "FC Porto",
    "logo" => "",
    "annnee_de_creation" => 1906
);

/*$sql = "INSERT INTO equipe (nom, logo, annee_de_creation)";
$sql.= " VALUES(" . "'" . $team["nom"] . "'" . ", " . "'" . $team["logo"] . "'" . "," . "'" . $team["annee_de_creation"] . "'" . ")";
var_dump($db->query($sql));*/

// on prépare la requête
$sql = $db->prepare("INSERT INTO equipe (nom, logo, annee_de_creation) VALUES(:nom, :logo, :annne_de_creation)");

// on alimente la requête
$sql->bindValue(":nom", $team["nom"]);
$sql->bindValue(":logo", $team["logo"]);
$sql->bindValue(":annne_de_creation", $team["annnee_de_creation"]);

// on exécute la requête
$sql->execute();

?>