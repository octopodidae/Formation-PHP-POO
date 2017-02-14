<?php


// Connexion à la base de données
try
{
    $db = new PDO('mysql:host=localhost;dbname=formation-php-poo;charset=utf8', 'root');
    //echo "<p>Connection works !</p>";
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// on prépare la requête
$sql = $db->prepare("INSERT INTO matchs (equipe_recevant, equipe_recue, date, lieu, type_competition, resultat)
VALUES(:equipe_recevant, :equipe_recue, :date, :lieu, :type_competition, :resultat)");

//echo "<p>" . $_POST["equipe1"];

// on alimente la requête
$sql->bindValue(":equipe_recevant", $_POST["equipe1"]);
$sql->bindValue(":equipe_recue", $_POST["equipe2"]);
$sql->bindValue(":date", $_POST["date"]);
$sql->bindValue(":lieu", $_POST["lieu"]);
$sql->bindValue(":type_competition", $_POST["type"]);
$sql->bindValue(":resultat", $_POST["resultat"]);


// on exécute la requête
if ($sql->execute()) {
  echo "<p> Match enregistré avec succès</p>";
} else {
    echo "<p>Erreur</p>";
}


?>