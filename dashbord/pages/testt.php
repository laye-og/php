<?php 
$bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
    $requete=$bdd->query('SELECT * FROM Feuil1');
    while ($donnes=$requete->fetch()) 
    {
    	//echo  "'".$donnes['Matricule']."--".$donnes['Prénom']."--".$donnes['Nom']."', </br>";
    }
   echo substr("123456789",0,3);
     ?>
