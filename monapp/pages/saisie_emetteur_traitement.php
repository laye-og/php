<?php
	require_once("connection.php");

	if (isset($_POST['ajout_emetteur']))
	{

		$nom      = htmlspecialchars($_POST['nom']);
	    $prenom     = htmlspecialchars($_POST['prenom']); 
	    $matricule      = htmlspecialchars($_POST['matricule']);
	    $service      = htmlspecialchars($_POST['service']);
	     $motDePasse  = $_POST['mot_de_passe'];
	   
		if(!empty($nom) AND !empty($prenom) AND !empty($service) AND !empty($matricule) AND !empty($motDePasse))
		{
			
			$requser = $bdd->prepare("INSERT INTO emetteur(Nom_Emetteur,Prenom_Emetteur,Direction_Emetteur,direction_Code_Direction,Mot_De_Passe) VALUES (?,?,?,?,?)");

			$requser->execute(array($nom,$prenom,$service,$matricule,$motDePasse));
           
	     header("location:liste_emetteurs.php");
		
		}
		else
		{
			echo "Les champs sont vides";
		}
	}
?>