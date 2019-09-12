<?php

namespace App\User;

class Eleve extends Utilisateur
{

    protected $emailParent;
    protected $class;
    protected $gender;

    /**
     * __construct
     *
     * @param  string $emailParent est l'email des parents de l'utilisateur.
     * @param  string $class est la classe de l'utilisateur.
     * @param  string $gender est le genre de l'utilisateur.
     *
     * @return void
     */
    public function __construct($firstname, $lastname, $password, $status, $emailParent, $class, $gender)
    {

        $this->emailParent = $emailParent;
        $this->class = $class;
        $this->gender = $gender;

        parent::__construct($firstname, $lastname, $password, $status);
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->emailParent;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($emailParent)
    {
        $this->emailParent = $emailParent;

        return $this;
    }

    /**
     * Get the value of class
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set the value of class
     *
     * @return  self
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }
}
