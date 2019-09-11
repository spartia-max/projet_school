<?php

namespace App\User;

class Utilisateur
{

    protected $firstname;
    protected $lastname;
    protected $password;
    protected $status; // en anglais (pas de faute !)


    /**
     * __construct
     *
     * @param string $firstname est le prenom de l'utilisateur.
     * @param string $lastname est le nom de l'utilisateur.
     * @param string $password est le mot de passe de l'utilisateur.
     * @param string $password est le mot de statut de l'utilisateur.
     * @return void
     */
    public function __construct($firstname, $lastname, $password, $status)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->status = $status; // élève, professeur ou directeur
    }

    public function login()
    {
        // sort le login avec le pattern Nom de l'utilisateur_Première lettre du prénom
        // Pattern regex -> /^[^a-z0-9][a-z]+_[A-Z]{1}$/
        $firstname = $this->firstname;
        $lastname = $this->lastname;

        $this->login = trim(ucfirst($firstname) . '_' . substr($lastname, 0, 1));

        return $this->login;
    }

    /**
     * Get the value of first_name
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * set le firstname -> nom
     *
     * @param string $firstname
     * @return self
     */
    public function setFirstname(string $firstname)
    {
        $this->first_name = $firstname;

        return $this;
    }

    /**
     * get le lastname -> prénom
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * set le lastname -> prénom
     *
     * @param string $lastname
     * @return self
     */
    public function setLast_name(string $lastname)
    {
        $this->last_name = $lastname;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus(int $status)
    {
        $this->status = $status;

        return $this;
    }
}

$user01 = new Utilisateur('Delaclasse', 'Roger', 'lkjhgf');

echo $user01->login();
