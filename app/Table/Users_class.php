<?php

class Users
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

    /**
     * __construct
     *
     * @param  string $first_name est le prenom de l'utilisateur.
     * @param  string $lastname est le nom de l'utilisateur.
     * @param  string $login est l'identifiant de l'utilisateur.
     * @param  string $password est le mot de passe de l'utilisateur
     * @param  string $email est l'email de l'utilisateur.
     *
     * @return void
     */
    public function __construct(string $first_name,string $lastname,string $login,string $password,string $email)
    {
        $this->_first_name = $first_name;
        $this->_last_name = $lastname;
        $this->_login = $login;
        $this->_password = $password;
        $this->_email =$email;
        $this->_status = $status;
        $this->_class = NULL;
        $this->_age = NULL;
        $this->_salary = NULL;
        $this->_seniority = NULL;
        $this->_gender = NULL;
    }

    /**
     * Methode pour crée un éleve.
     *
     * @return void
     */
    public function CréeEleve()
    {
        echo "Crée un éléve";
    }
    
    /**
     * Methode pour crée un professeur.
     *
     * @return void
     */
    public function CréeProfesseur()
    {
        echo "Crée un professeur";
    }

    /**
     * Get the value of _first_name
     */ 
    public function get_first_name()
    {
        return $this->_first_name;
    }

    /**
     * Set the value of _first_name
     *
     * @return  self
     */ 
    public function set_first_name($_first_name)
    {
        $this->_first_name = $_first_name;
        return $this;
    }

    /**
     * Get the value of _last_name
     */ 
    public function get_last_name()
    {
        return $this->_last_name;
    }

    /**
     * Set the value of _last_name
     *
     * @return  self
     */ 
    public function set_last_name($_last_name)
    {
        $this->_last_name = $_last_name;
        return $this;
    }

    /**
     * Get the value of _login
     */ 
    public function get_login()
    {
        return $this->_login;
    }

    /**
     * Set the value of _login
     *
     * @return  self
     */ 
    public function set_login($_login)
    {
        $this->_login = $_login;
        return $this;
    }

    /**
     * Get the value of _password
     */ 
    public function get_password()
    {
        return $this->_password;
    }

    /**
     * Set the value of _password
     *
     * @return  self
     */ 
    public function set_password($_password)
    {
        $this->_password = $_password;
        return $this;

    }

    /**
     * Get the value of _email
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function set_email($_email)
    {
        $this->_email = $_email;
        return $this;

    }

    /**
     * Get the value of _status
     */ 
    public function get_status()
    {
        return $this->_status;
    }

    /**
     * Set the value of _status
     *
     * @return  self
     */ 
    public function set_status($_status)
    {
        $this->_status = $_status;
        return $this;
    }

    /**
     * Get the value of _class
     */ 
    public function get_class()
    {
        return $this->$_class;
    }

    /**
     * Set the value of _class
     *
     * @return  self
     */ 
    public function set_class($_class)
    {
        $this->_class = $_class;
        return $this;

        
    }

    /**
     * Get the value of _age
     */ 
    public function get_age()
    {
        return $this->_age;
    }

    /**
     * Set the value of _age
     *
     * @return  self
     */ 
    public function set_age($_age)
    {
        $this->_age = $_age;
        return $this;

    
    }

    /**
     * Get the value of _salary
     */ 
    public function get_salary()
    {
        return $this->_salary;
    }

    /**
     * Set the value of _salary
     *
     * @return  self
     */ 
    public function set_salary($_salary)
    {
        $this->_salary = $_salary;
        return $this;
    }

    /**
     * Get the value of _seniority
     */ 
    public function get_seniority()
    {
        return $this->_seniority;
    }

    /**
     * Set the value of _seniority
     *
     * @return  self
     */ 
    public function set_seniority($_seniority)
    {
        $this->_seniority = $_seniority;
        return $this;
    }

    /**
     * Get the value of _gender
     */ 
    public function get_gender()
    {
        return $this->_gender;
    }

    /**
     * Set the value of _gender
     *
     * @return  self
     */ 
    public function set_gender($_gender)
    {
        $this->_gender = $_gender;
        return $this;
    }
}

