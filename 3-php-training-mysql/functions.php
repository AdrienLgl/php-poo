<?php

function recup_donnees(){

 
    $name = $_POST['name'];
    $min_age = $_POST['min_age'];
    $max_age = $_POST['max_age'];

    $min_players = $_POST['min_players'];
    $max_players = $_POST['max_players'];
    $picture = $_POST['picture'];

    try{

    include 'connexion.php';

    $sql = $bdd->prepare("INSERT INTO boardgames (name, players_min, players_max, age_min, age_max, picture) VALUES ('$name', '$min_players', '$max_players', '$min_age', '$max_age', '$picture')");

    $sql->execute();

    echo 'Votre jeu à bien été ajouté !!!';

    }catch (PDOException $e){

        echo "Oups ! Il semblerait qu'il y ait un problème de connexion Internet";
    }

}

function affichage(){

    include 'connexion.php';
            
    $requete = $bdd->query('SELECT * FROM boardgames ORDER BY id' );
    while ($data = $requete->fetch()){
                
      //Récupération des données
      
        $game =  utf8_encode($data['name']);
        $min_age = $data['age_min'];
        $max_age = $data['age_max'];
        $min_players = $data['players_min'];
        $max_players = $data['players_max'];
        $picture = $data['picture'];
       
        include 'jeux.php';

      }

      $requete->closeCursor();

}

function delete_game(){

    include 'connexion.php';

    $name = utf8_decode($_POST['name']);
    

    try{

        include 'connexion.php';
    
        $sql = $bdd->prepare("DELETE FROM boardgames WHERE name = '$name'");
    
        $sql->execute();
    
        echo 'Votre jeu à bien été supprimé !!!';
        header('Location: read.php');

    
        }catch (PDOException $e){
    
            echo "Oups ! Il semblerait qu'il y ait un problème de connexion Internet";
        }

}


function select(){

    include 'connexion.php';
            
    $requete = $bdd->query('SELECT * FROM boardgames ORDER BY id' );
    while ($data = $requete->fetch()){
                
      //Récupération des données
      
        $game =  utf8_encode($data['name']);


    echo '<option name= "name" value="'.$game.'">'.$game.'</option>';

    }
}

function update(){

    include 'connexion.php';

    $name = utf8_decode($_POST['name']);
    $min_age_update = $_POST['age_min'];
    $max_age_update = $_POST['age_max'];
    $min_players_update = $_POST['players_min'];
    $max_players_update = $_POST['players_max'];
    $picture_update = $_POST['picture'];
    

    try{

        include 'connexion.php';
    
        $sql = $bdd->prepare("UPDATE boardgames SET players_min= '$min_players_update', players_max='$max_players_update', age_min = '$min_age_update', age_max = '$max_age_update', picture = '$picture_update' WHERE name = '$name'");
    
        $sql->execute();
    
        echo 'Votre jeu à bien été modifié !!!';

    
        }catch (PDOException $e){
    
            echo "Oups ! Il semblerait qu'il y ait un problème de connexion Internet";
        }


}














?>