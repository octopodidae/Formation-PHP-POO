<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formualire</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="./app.php">
            <h2>MATCHS</h2>
            <div class="form-group">
                <label for="equipe1">Equipe reçevant</label>
                <br>
                <select name="equipe1">
                    <?php
                    // Connexion à la base de données
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=formation-php-poo;charset=utf8', 'root');
                        //echo "<p>Connection works !</p>";
                    }
                    catch(Exception $e)
                    {
                        die('Erreur : '.$e->getMessage());
                    }

                    // On récupère les équipes
                    $req = $bdd->query('SELECT * FROM equipe');

                    while ($equipe = $req->fetch())
                    {
                        echo "<option value = '" . $equipe["nom"] . "'>" .
                        $equipe["nom"] . "</option>"; 
                    } // Fin de la boucle des équipes
                    $req->closeCursor();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="equipe2">Visiteur</label>
                <br>
                <select name="equipe2">
                    <?php
                    // Connexion à la base de données
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=formation-php-poo;charset=utf8', 'root');
                        echo "<p>Connection works !</p>";
                    }
                    catch(Exception $e)
                    {
                        die('Erreur : '.$e->getMessage());
                    }

                    // On récupère les équipes
                    $req = $bdd->query('SELECT * FROM equipe');

                    while ($equipe = $req->fetch())
                    {
                        echo "<option value = '" . $equipe["nom"] . "'>" .
                        $equipe["nom"] . "</option>"; 
                    } // Fin de la boucle des équipes
                    $req->closeCursor();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date de la rencontre</label>
                <input type="date" class="form-control" id="date" name="date"> </div>
            <div class="form-group">
                <label for="lieu">Lieu de la rencontre</label>
                <input type="text" class="form-control" id="lieu" name="lieu"> </div>
            <div class="form-group">
                <label for="largeur">Competition</label>
                <input type="text" class="form-control" id="type" name="type"> </div>
            <div class="form-group">
                <label for="resultat">Résultat</label>
                <input type="text" class="form-control" id="resultat" name="resultat"> </div>
            <button type="submit" class="btn btn-default">Envoyer</button>
        </form>
    </div>
</body>

</html>