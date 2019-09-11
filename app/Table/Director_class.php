<?php

namespace App\Table;

class Director extends Users
{
    /**
     * __construct
     *
     * @param  string $first_name est le prenom de l'utilisateur.
     * @param  string $lastname est le nom de l'utilisateur.
     * @param  string $login est l'identifiant de l'utilisateur.
     * @param  string $password est le mot de passe de l'utilisateur
     *
     * @return void
     */
    public function __construct(string $first_name,string $lastname,string $login,string $password, string $email)
    {
        
        parent::__construct($status, $first_name, $lastname, $login, $password,$email);
        $this->_status = $status;
        $this->_first_name = $first_name;
        $this->_last_name= $lastname;
        $this->_login= $login;
        $this->_password= $password;
        $this->_email=$email;
    }

    /*Soumettre un statut*/
    public function set_status($status){
        $this->$_status=$status;
    }

    /* Capter le statut */
    public function get_status(){
        return $this;
    }

    /* Genérer un firstname */
    public function set_first_name($first_name)
    {
        $this->_first_name = $_first_name;

    }

    /* Capter un firstname */
    public function get_first_name()
    {
        return $this->_last_name;
    }

     /* Genérer un lastname */
    public function set_last_name($last_name)
    {
        $this->_last_name = $_last_name;
 
    }
 
     /* Capter un lastname */
    public function get_last_name()
    {
        return $this->_last_name;
    }

       /* Genérer un login */
    public function set_login($login)
    {
        $this->_login = $login;

    }

    /* Capter un login */
    public function get_login()
    {
        return $this->_login;
    }

    /* Genérer un password */
    public function set_password ($password)
    {
        $this->_password = $password;

    }

    /* Capter un password */
    public function get_password()
    {
        return $this->_password;
    }

    /* Genérer un email */
    public function set_email ($email)
    {
        $this->_email = $email;
    }

    /* Capter un email */
    public function get_email()
    {
        return $this->_email;
    }
}
