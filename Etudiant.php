<?php
/**
 * Created by PhpStorm.
 * User: Hamza tuni
 * Date: 08/01/2018
 * Time: 19:09*
 */
include "Personne.php";
class Etudiant extends Personne
{
private $module;

public function __construct($nom, $prenom, $age,$module)
{
    $this->module = $module;
    parent:: __construct($nom, $prenom, $age);

}

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param mixed $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }


}

/*$e = new Etudiant('Hamza','Hamadi',26,'JAVA');
echo "*********************Etudiant******************<br>";
echo $e->getNom()."<br>";
echo $e->getPrenom()."<br>";
echo $e->getAge()."<br>";
echo $e->getModule()."<br>";*/
