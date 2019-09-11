<?php

namespace App\Table;

class Student extends Users
{

    /**
     * __construct
     *
     * @param  string $first_name est le prenom de l'utilisateur.
     * @param  string $lastname est le nom de l'utilisateur.
     * @param  string $login est l'identifiant de l'utilisateur.
     * @param  string $password est le mot de passe de l'utilisateur
     * @param  string $email est l'email de l'utilisateur.
     * @param  string $class est la classe de l'utilisateur.
     * @param  string $gender est le genre de l'utilisateur.
     *
     * @return void
     */
    public function __construct(string $first_name,string $lastname,string $login,string $password,string $email,string $class,string $gender)
    {
        
        parent::__construct($first_name, $lastname, $login, $password, $email);
        $this->_status = $status;
        $this->_class = $class;
        $this->_gender = $gender;
    }











}
