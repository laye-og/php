<?php
	require_once("connection.php");

	if (isset($_POST['ajout_connect']))
	{

		$login      = htmlspecialchars($_POST['login']);
	    $motDePasse = $_POST['mot_de_passe'];    
	   
		if(!empty($login) AND !empty($motDePasse))
		{
			
			$requser = $bdd->prepare('SELECT * FROM users WHERE Login = ? AND Mot_Passe = ?');

			$requser->execute(array($login, $motDePasse));

			$existenceCouple = $requser->rowCount();

			if ($existenceCouple)
			{
				header('location:menu.php');
			}
			else
			{
				echo 'Compte non disponible';
			  	header('Location: connexion.php');		 
			}
		}
		else
		{
			echo "Les champs sont vides";
		}
	}
?>