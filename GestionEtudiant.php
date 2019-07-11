<?php
/**
 * Created by PhpStorm.
 * User: Hamza tuni
 * Date: 09/01/2018
 * Time: 19:14
 */
include "Config.php";
include "Etudiant.php";


class GestionEtudiant
{
public $pdo;

    function __construct()
    {
        $c=new Config();
    $this->pdo=$c->connexion();
    }

    function  ajouterEtudiant ($e) {
     $req="INSERT INTO `personne`(`nom`, `prenom`, `age`, `module`, `role`) VALUES ('".$e->getNom()."','".$e->getPrenom()."','".$e->getAge()."','".$e->getModule()."','etudiant')";
     $this->pdo->query($req);
    }
    function afficherEtudiant (){
       $req="SELECT * from personne WHERE role='etudiant'";
       $res= $this->pdo->query($req);
       return $res->fetchAll();
    }
    function SupprimerEtudiant ($id){
    $req="DELETE FROM personne WHERE id=$id";
    $this->pdo->query($req);
   }
        function affEtudiant($id){

        $req="SELECT * from personne WHERE id=$id";

        $res= $this->pdo->query($req);
        return $res->fetch();
    }
    function modifierEtudiant ($id,$e) {
        $req="UPDATE personne set nom='".$e->getNom()."', prenom='".$e->getPrenom()."',age='".$e->getAge()."',module='".$e->getModule()."'  WHERE id=$id";
        $res= $this->pdo->query($req);
    }

}
$g=new GestionEtudiant();

if (isset($_GET['ajout'])) {
    $e=new Etudiant($_GET['nom'],$_GET['prenom'],$_GET['age'],$_GET['module']);
    $g->ajouterEtudiant($e);
    echo "Etudiant Ajouter";
}
else if (isset($_GET['affiche'])) {
    echo "Page Affiche";
    $tab=$g->afficherEtudiant();
    /*var_dump($tab);*/
    ?>
<form method="post" action="GestionEtudiant.php">
<table border="2">
 <tr>
 <td>Nom</td>
     <td>Prenom</td>
     <td>Age</td>
     <td>Module</td>
     <td> Role</td>
     <td>Supprimer</td>
     <td>Modifier</td>

 </tr>
    <?php
    foreach ($tab as $i) {
        echo "<tr>";
        echo "<td> ".$i['nom']."</td>";
        echo "<td> ".$i[2]."</td>";
        echo "<td> ".$i[3]."</td>";
        echo "<td> ".$i[4]."</td>";
        echo "<td> ".$i[6]."</td>";

        ?>
        <td> <input type="radio" name ="supp" value ="<?php echo $i['id'] ?>"</td>
       <td>  <a href="Modifier.php?id=<?php echo $i[0] ?>" name="update">Modifier </a> </td>
        </tr>
        <?php

    }
    ?>
</table>
<input type="submit" name="supprimer" value="Supprimer">
</form>
<?php
}

else if (isset($_POST['supprimer'])) {
    $g->SupprimerEtudiant($_POST['supp']);
}
else if (isset ($_POST['modif'])) {
    $e = new Etudiant($_POST['nomu'], $_POST['prenomu'], $_POST['ageu'], $_POST['moduleu']);
    echo $_GET['id'];
    $g->modifierEtudiant($_GET['id'], $e);
}