<?php
require_once("connection.php");

if (isset([$_POST(ajout_emetteur)])) {
	

	if(isset($_POST['nom'],$_POST['prenom'],$_POST['service']$_POST['matricule'])){
		

		if($_POST['nom'] != "" && $_POST['prenom'] != "" && $_POST['service'] != "" $_POST['matricule'] != ""){
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$service = $_POST['service'];
			$matricule = $_POST['matricule'];

			$insertion = "INSERT INTO emetteur (nom, prenom, service, matricule) VALUES ($nom, $prenom, $service, $matricule);
		        $execute = $pdo->query($insertion);
		       
		    if ($execute == true){
			     $msgsuccess = "information enregistree";
			} else {
				$msgerror = "erreur";
			}
	}
}	

	

?>