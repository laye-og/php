<?php  
require 'include/connect_db.php';
if (!empty($_FILES)) {
	$FILES_name = $_FILES['fichiers']['name'];

	$FILES_temp_rep = $_FILES['fichiers']['tmp_name'];
	$FILES_destination="files/".$FILES_name;
	$l="fzfgzefezrfzefzefzefzefzefzefzefzefzfzefzcdczefefcdzefd";

	echo "le nom du fichier est :".$FILES_name ."<br>";
	$edit=fopen($FILES_name,"w");
	while (!feof($edit)) {
		fputs($l,255);
		echo "$l";
	}
	
	if (move_uploaded_file($FILES_temp_rep,$FILES_destination ))
	{
		 $req = $db-> prepare('INSERT INTO files(nom,url) VALUES(?,?)');
			$req->execute( array($FILES_name ,$FILES_destination));
			echo "fichier uploade avec succes <br/>";
			echo "$FILES_name:<a href='$FILES_destination'>$FILES_name</a>";
}	
			var_dump($req->fetch());
			while($data=$req->fetch())
			{
				echo $data['nom'].':'.'<a href="'.$data['url'].'">'.$data['nom'].'</a>' ;
			}
			
		}	


}
?>