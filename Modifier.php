<?php
/**
 * Created by PhpStorm.
 * User: Hamza tuni
 * Date: 11/01/2018
 * Time: 18:58
 */
include "GestionEtudiant.php";

$Id=$_GET['id'];

$tab=$g->affEtudiant($Id);

/*$g->modifierEtudiant($Id,$nom,$prenom,$age,$module);*/



?>
<form action="GestionEtudiant.php?id=<?php echo $tab['0'] ?>" method="post">
    <table>
            <tr><td>Nom: </td> <td> <input type="text" name="nomu" value="<?php echo $tab['1'] ?>" />  </td></tr>
            <tr><td>Prenom: </td> <td><input type="text" name="prenomu" value="<?php echo $tab['2'] ?>" /></td> </tr>
            <tr> <td> Age : </td> <td> <input type="number" name="ageu" value="<?php echo $tab['3'] ?>"/> </td>  </tr>
            <tr> <td>Module:</td> <td> <input type="text" name="moduleu" value="<?php echo $tab['4'] ?>" />  </td></tr>
            <tr> <td> <input type="submit" value="Modifier"  name="modif"/></td></tr>
    </table>

</form>
<?php

