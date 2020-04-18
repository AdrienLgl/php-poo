<?php

class Form_exo{

    private string $firstname;
    private string $lastname;
    private string $method;
    private string $action;
    private $fields = [];
    public $options = [];

    public function __construct($action, $method){

        $this->action = $action;
        $this->method = $method;
    }

    public function addTextField($fieldName, $fieldValue){ //Crée un input
        
       $this->fields[] = '<input name="'.$fieldName.'" value = "'.$fieldValue.'">';
           
    }

    public function addSubmitButton($button){ //Crée un bouton

        $this->button = '<br><br><input type="submit" value='.$button.'>';
        return $this;
    }

    public function addTextArea($textarea){ //Crée une zone de texte
        $this->textarea = '<br><br><textarea style=" resize : none"></textarea>';
        return $this;

    }

    public function addSelect($options, $title){

        $this->select = '<br><br><select id="'.$title.'" name="'.$title.'">'; //Ouvre le select

        foreach ($options as $option) { //Sélectionne toutes les options rentrées dans la fonction
            $options = $option;
            $this->select .= '<option value = "'.$option.'" >'.$option.' </option>';
        }

        $this->select .= '</select>'; //Ferme le select
    }

    public function build(){ //Génère le formulaire

        echo '<b>Voici le formulaire :</b>' ;

        $build = '<br><br><form action = "'.$this->action.'" method = "'.$this->method.'">'; //Début du formulaire
        foreach ($this->fields as $field) { //Sélectionne tous les input crées précedemment
            $build .=  $field;
        }                           // .= ajoute des éléments à la concaténation
        $build .= $this->textarea; //Ajoute la textarea
        $build .= $this->select; //Ajoute le select
        $build .= $this->button; //Ajoute le bouton
        $build .= '</form>'; //Fin du formulaire
        return $build;

    }
    
}