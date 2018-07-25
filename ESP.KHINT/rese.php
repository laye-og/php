<?php  
require 'include/connect_db.php';
if (!empty($_FILES)) {
	$FILES_name = $_FILES['fichiers']['name'];
	$FILES_type = $_FILES['fichiers']['name'];
	$FILES_temp_rep = $_FILES['fichiers']['tmp_name'];
	$FILES_destination="files/".$FILES_name;

	echo "le nom du fichier est :".$FILES_name ."<br>" ; 
	echo "le type du fichier est :".$FILES_type;
	if(move_uploaded_file($FILES_temp_rep,$FILES_destination  )
	{
		echo "fichier uploade avec succes ";
		$req = $db-> prepare('INSERT INTO files(nom,url) VALUES(?,?)');
			$req->execute( array($FILES_name ,$FILES_destination));
	}
	else {
		echo "error";
	}


}
?>