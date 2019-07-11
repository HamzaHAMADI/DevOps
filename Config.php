<?php
/**
 * Created by PhpStorm.
 * User: Hamza tuni
 * Date: 09/01/2018
 * Time: 19:00
 */

class Config
{
public function  connexion () {
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="php5";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $conn;
}
}