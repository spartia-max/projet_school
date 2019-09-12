<?php

namespace App\User;

/**
 * Mais pourquoi créer une classe Directeur si les propriétés
 * sont les mêmes que pour la classe Utilisateur ?!
 * 
 * Tout simplement pour le 'cas où'
 * -> si un jour le Directeur a besoin d'une nouvelle propriété
 * -> ça nous évitera de modifier la classe Utilisateur et surtout
 * -> cela évitera d'appeler une nouvelle propriété inutile pour
 * -> les classes enfants (Eleve et Professeur)
 * 
 * Toujours anticiper les futures besoins :D
 */
class Directeur extends Utilisateur
{

    /**
     * __construct pour le directeur
     *
     * @param  string $first_name est le prenom de l'utilisateur.
     * @param  string $lastname est le nom de l'utilisateur.
     * @param  string $password est le mot de passe de l'utilisateur
     *
     */
    public function __construct($firstname, $lastname, $password)
    {
        parent::__construct($firstname, $lastname, $password);
    }
    /**
     * Get the value of first_name
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->first_name = $firstname;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */
    public function setLast_name($lastname)
    {
        $this->last_name = $lastname;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
