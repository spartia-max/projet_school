<?php

require 'Utilisateur.php';

class Eleve extends Utilisateur
{

    public function __construct($first_name, $lastname, $login, $password, $email, $class, $gender)
    {
        
        parent::__construct($first_name, $lastname, $login, $password, $email);
        $this->_status = "Eleve";
        $this->_class = $class;
        $this->_gender = $gender;
    }
}


$eleve = new Eleve ("Bruno", "Genova", "Genoba_b", "password", "brunogenova.recrutement@gmail.com", "CM2", "M");

var_dump($eleve);