<?php
require_once("connection.php");

if (isset[$_POST(ajout_fiche)]) {

	//on recupere les variables
	$numero                  = htmlspecialchars($_POST["numero"]);
	$date_cloture_RH         = htmlspecialchars($_POST["date_cloture_RH"]);
	$date_cloture_RQ         = htmlspecialchars($_POST["date_cloture_RQ"]);
	$action_corrective       = htmlspecialchars($_POST["action_corrective"]);
	$observation             = htmlspecialchars($_POST["observation"]);
	$date_resolution         = htmlspecialchars($_POST["date_resolution"]);
	$duree                   = htmlspecialchars($_POST["duree"]);



	//on teste si les variables ne sont pas vides

	if(!empty($numero) AND !empty($date_cloture_RH) AND !empty($date_cloture_RQ) AND !empty($action_corrective) AND !empty($observation) AND !empty($date_resolution) AND !empty($duree))
	{
		// requete d'insertion
	   $requete = $bdd->prepare("INSERT INTO FROM fiche_nc (Date_Cloture_RH, Date_Cloture_RQ, Action_Corrective, Observation, Date_Resolution, Duree ) VALUES (?, ?, ?, ?, ?, ?) ");

	     // on execute la requete 
	     $requete->execute(array($numero, $date_cloture_RH, $date_cloture_RQ, $action_corrective, $observation, $date_resolution, $duree));
	     header("location:liste_fiche.php");
	}
	else
	{
		
	}




}


?>