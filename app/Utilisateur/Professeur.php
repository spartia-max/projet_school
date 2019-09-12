<?php

namespace App\User;

class Professeur extends Utilisateur
{

    protected $email;
    protected $class; // répêté dans Eleve et Professeur, pas mieux ?
    protected $age;
    protected $salary;
    protected $seniority; // ancienneté

    /**
     * __construct pour le professeur
     *
     * @param  string $email du professeur
     * @param  string $class du professeur
     * @param  int $age du professeur
     * @param  int $salary du professeur
     * @param  int $seniority du professeur
     *
     * @return void
     */
    public function __construct($firstname, $lastname, $password, $status, $email, $class, $age, $salary, $seniority)
    {
        $this->email = $email;
        $this->class = $class;
        $this->age = $age;
        $this->salary = $salary;
        $this->seniority = $seniority;

        parent::__construct($firstname, $lastname, $password, $status);
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

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of class
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * Set the value of class
     *
     * @return  self
     */
    public function setClass(string $class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of salary
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */
    public function setSalary(float $salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of seniority
     */
    public function getSeniority(): float
    {
        return $this->seniority;
    }

    /**
     * Set the value of seniority
     *
     * @return  self
     */
    public function setSeniority(float $seniority)
    {
        $this->seniority = $seniority;

        return $this;
    }
}
