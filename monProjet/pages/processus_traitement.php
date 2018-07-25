<?php
require_once("connection.php");

if (isset[$_POST(ajout_processus)]) {

	//on recupere les variables
	$numero   = htmlspecialchars($_POST["numero"]);
	$processus      = htmlspecialchars($_POST["recherche_processus"]);
	
	//on teste si les variables ne sont pas vides

	if(!empty($numero) AND !empty($processus))
	{
		// requete d'insertion
	   $requete = $bdd->prepare("INSERT INTO FROM processus (Description_Processus) VALUES (?) ");

	     // on execute la requete 
	     $requete->execute(array($numero, $processus);
	     header("location:liste_processus.php");
	}
	else
	{
		
	}




}


?>