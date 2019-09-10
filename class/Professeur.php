<?php

require 'Utilisateur.php';

class Professeur extends Utilisateur
{
    public function __construct($first_name, $lastname, $login, $password, $email, $class, $age, $salary, $seniority)
    {
        
        parent::__construct($first_name, $lastname, $login, $password, $email);
        $this->_status = "Professeur";
        $this->_class = $class;
        $this->_age = $age;
        $this->_salary = $salary;
        $this->_seniority = $seniority;
    }
    public function Afficher()
    {
        echo "Afficher la class";
    }
    
    public function EntrerNote()
    {
        echo "Entrer une note";
    }
}


$pro = new Professeur ("Jean","Michel","Jm","password","ememmememememem","CM2",35,15,3000);

var_dump($pro);