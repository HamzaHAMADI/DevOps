<?php
/**
 * Created by PhpStorm.
 * User: Hamza tuni
 * Date: 08/01/2018
 * Time: 19:25
 */
include "Personne.php";
class Enseignant extends Personne
{
private $Salaire;

    /**
     * Enseignant constructor.
     * @param $Salaire
     */
    public function __construct($nom, $prenom, $age, $Salaire)
    {
        $this->Salaire = $Salaire;
        parent::__construct($nom, $prenom, $age);
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->Salaire;
    }

    /**
     * @param mixed $Salaire
     */
    public function setSalaire($Salaire)
    {
        $this->Salaire = $Salaire;
    }


}

$Ens = new Enseignant('Hamdi','Salah',26,2500);
echo "*****************Enseignant******************<br>";
echo $Ens->getNom()."<br>";
echo $Ens->getPrenom()."<br>";
echo $Ens->getAge()."<br>";
echo $Ens->getSalaire()."<br>";