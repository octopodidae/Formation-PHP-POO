<?php

try {    
    $db = new PDO("mysql:host=localhost; dbname=formation-php-poo; charset=utf8", "root"); 
    echo "It works ! <br>";
} catch(Excepion $e) {
    //echo $e->getMessage() . "<br>";
    die("Erreur : " . $e.getMessage() . "<br>");
}

$reponse = $db->query("select * from Equipe");

//var_dump($reponse);

while($equipe = $reponse->fetch()) {
    //var_dump($equipe);
    echo "<p>" . $equipe["nom"] . "</p>";
}

?>