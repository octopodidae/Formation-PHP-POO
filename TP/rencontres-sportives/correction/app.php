<?php

require "classes/Rencontre.php";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<hr>";

$rencontre = new Rencontre($_POST);

echo $rencontre->getEquipe1() . "<br>";
echo $rencontre->getEquipe2() . "<br>";
echo $rencontre->getLieu() . "<br>";
echo $rencontre->getType() . "<br>";
echo $rencontre->getResultat() . "<br>";


?>
