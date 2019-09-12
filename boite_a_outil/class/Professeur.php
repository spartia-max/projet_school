<?php

require 'Utilisateur.php';

class Professeur extends Utilisateur
{

    /**
     * __construct
     *
     * @param  string $first_name
     * @param  string $lastname
     * @param  string $login
     * @param  string $password
     * @param  string $email
     * @param  string $class
     * @param  int $age
     * @param  int $salary
     * @param  int $seniority
     *
     * @return void
     */
    public function __construct(string $first_name,string $lastname,string $login,string $password,string $email,string $class,int $age,int $salary,int $seniority)
    {
        
        parent::__construct($first_name, $lastname, $login, $password, $email);
        $this->_status = "Professeur";
        $this->_class = $class;
        $this->_age = $age;
        $this->_salary = $salary;
        $this->_seniority = $seniority;
    }
    /**
     * Afficher les éléves de la classe de l'utilisateur.
     *
     * @return void
     */
    public function Afficher()
    {
        echo "Afficher la class";
    }
    
    /**
     * EntrerNote permet de donner une note a un éléves.
     *
     * @return void
     */
    public function EntrerNote()
    {
        echo "Entrer une note";
    }
}