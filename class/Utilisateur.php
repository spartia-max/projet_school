<?php

class Utilisateur
{

    protected $_first_name;
    protected $_last_name;
    protected $_login;
    protected $_password;
    protected $_email;
    protected $_status;
    protected $_class;
    protected $_age;
    protected $_salary;
    protected $_seniority;
    protected $_gender;

    public function __construct($first_name, $lastname, $login, $password, $email)
    {
        $this->_first_name = $first_name;
        $this->_last_name = $lastname;
        $this->_login = $login;
        $this->_password = $password;
        $this->_email =$email;
        $this->_status = "Directeur";
        $this->_class = NULL;
        $this->_age = NULL;
        $this->_salary = NULL;
        $this->_seniority = NULL;
        $this->_gender = NULL;
    }

    public function CréeEleve()
    {
        echo "Crée un éléves";
    }
    
    public function CréeProfesseur()
    {
        echo "";
    }
}

