<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
  </head>
  <body>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
    <table>
				<thead>
    <?php

    include 'connexion.php';
            
    $requete = $bdd->query('SELECT * FROM boardgames ORDER BY id' );
    while ($data = $requete->fetch()){
                
      //Récupération des données
      
         $game =  utf8_encode($data['name']);
        echo ' <tr>
        <td style= "border: 1px solid black"><a href="./update.php">'.$game.'</a></td></tr>';

      }

      $requete->closeCursor();

    ?>

      </thead>
      </table>


  </body>
</html>
