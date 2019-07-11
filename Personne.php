<?php
/**
 * Created by PhpStorm.
 * User: fadoua
 * Date: 2018-01-03
 * Time: 6:47 PM
 */

class Personne
{

    private $nom;
    private $prenom;
    private $age;


    /**
     * Personne constructor.
     * @param $nom
     * @param $prenom
     * @param $age
     */
    public function __construct($nom, $prenom, $age)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;


    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }


    function getPrenom() {
        return $this->prenom;
    }

    function setPrenom ($prenom) {
        $this->prenom=$prenom;
    }
}







