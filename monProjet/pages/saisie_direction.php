<?php
require_once("connection.php");

if (isset[$_POST(ajout_direction)]) {

	//on recupere les variables
	$code                  = htmlspecialchars($_POST["code"]);
	$libelle               = htmlspecialchars($_POST["libelle"]);
	

	//on teste si les variables ne sont pas vides

	if(!empty($code) AND !empty($libelle))
	{
		// requete d'insertion
	   $requete = $bdd->prepare("INSERT INTO FROM direction (Llibelle_Direction ) VALUES (?) ");

	     // on execute la requete 
	     $requete->execute(array($code, $libelle));
	     header("location:liste_direction.php");
	}
	else
	{
		
	}




}


?>