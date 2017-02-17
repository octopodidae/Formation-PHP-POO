<?php
class Rencontre
{

    private $equipe1;
    private $equipe2;
    private $date;
    private $type;
    private $lieu;
    private $resultat;
    private $db;


  public function __construct(array $data)
  {
    // hydratation : on fournit des valeurs aux propriétés
    if (!empty($data)) // on hydrate si le tableau de données n'est pas vide
    {
      $this->setEquipe1($data["equipe1"]);
      $this->setEquipe2($data["equipe2"]);
      $this->setLieu($data["lieu"]);
      $this->setType($data["type"]);
      $this->setResultat($data["resultat"]);

      $this->setDb(new PDO ('mysql:host=localhost;dbname=formation-php-poo;charset=utf8', 'root'));
    }
  }

  public function setDb (PDO $dbconnection)
  {
    try
    {
        $db = new PDO($dbconnection);
        //echo "<p>Connection works !</p>";
        $this->$db = $db;
        return $this;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
  }

  public function enregistrer()
  {

  }

  public function liste() {

    $rencontres = [];


    return $rencontres;

  }

  public function getEquipe1()
  {
      return $this->equipe1;
  }

  public function setEquipe1($equipe1)
  {
      $this->equipe1 = $equipe1;

      return $this;
  }

  public function getEquipe2()
  {
      return $this->equipe2;
  }

  public function setEquipe2($equipe2)
  {
      $this->equipe2 = $equipe2;

      return $this;
  }

  public function getDate()
  {
      return $this->date;
  }


  public function setDate($date)
  {
      $this->date = $date;

      return $this;
  }

  public function getType()
  {
      return $this->type;
  }

  public function setType($type)
  {
      $this->type = $type;

      return $this;
  }

  public function getLieu()
  {
      return $this->lieu;
  }

  public function setLieu($lieu)
  {
      $this->lieu = $lieu;

      return $this;
  }

  public function getResultat()
  {
      return $this->resultat;
  }

  public function setResultat($resultat)
  {
      $this->resultat = $resultat;

      return $this;
  }

}
?>
