<?php
 
    $con = new PDO('mysql:host=localhost;dbname=nomdemabase;charset=utf8', 'root', 'amadou');
 
 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$codePostal=$_POST['codePostal'];
$telephone=$_POST['telephone'];
 
 
$sql="INSERT INTO personnes SET $nom, $prenom, $adresse, $codePostal, $telephone ;";
 
?>