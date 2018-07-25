<?php
require_once("connection.php");

if (isset[$_POST(ajout_demande)]) {

	//on recupere les variables
	$numero_demande   = htmlspecialchars($_POST["demande"]);
	$probleme         = htmlspecialchars($_POST["probleme"]);
	$description      = htmlspecialchars($_POST["description"]);
	$date_traitement  = htmlspecialchars($_POST["date_traitement"]);
	$date_emission    = htmlspecialchars($_POST["date_emission"]);

	//on teste si les variables ne sont pas vides

	if(!empty($numero_demande) AND !empty($probleme) AND !empty($description) AND !empty($date_traitement) AND !empty($date_emission))
	{
		// requete d'insertion
	   $requete = $bdd->prepare("INSERT INTO FROM demande_nc (Emetteur_Matricule_Emetteur, Description, Probleme, Date_Emission, Date_Traitement_Souhaite, Destinataire_Action) VALUES (?, ?, ?, ?, ?, ?) ");

	     // on execute la requete 
	     $requete->execute(array($numero_demande, $probleme, $description, $date_traitement, $date_emission));
	     header("location:liste_demande.php");
	}
	else
	{
		
	}




}


?>