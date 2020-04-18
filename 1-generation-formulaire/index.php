<?php
include 'Form.php';


$action = 'index.php';
$method = 'post';
$lastname = 'Laigle';
$firstname = 'Adrien';
$textarea = 'text';


$form = new Form_exo($action, $method);  // créer le début du formulaire
$form->addTextField('prenom', $firstname); // créer un input de type texte avec comme valeur par défaut $prenom
$form->addTextField('nom',$lastname); // créer un input de type texte avec comme valeur par défaut $nom
$form->addTextArea($textarea);// créer une textarea
$form->addSelect([1=> 'Mr', 2=> 'Mme', 3=>'Autre'], 'title'); //créer une liste
$form->addSubmitButton('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier

echo $form->build(); // générer le formulaire