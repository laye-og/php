<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellpadding="0" cellspacing="0">
<tr>
<th>MON SITE</th>
<th>URL</th>
</tr>
<?php
function validation($val)
{
	if(isset($val) && !empty($val)){
		return true;

	}
		return false;
}	
session_start();
		$BD= new PDO("mysql:host=localhost;dbname=mon_site",'root','');
		if(isset($_POST['OK']))
		{
			if(validation($_POST['nom_album']) && validation($_POST['auteur']))
				{
					$req='INSERT INTO album(nom_album,user_id,Auteur) VALUES(?,?,?)';
					$requete=$BD->prepare($req);
					$requete->execute(array($_POST['nom_album'],$_SESSION['id'],$_POST['auteur']));
						if($requete)
							{	?>	
								<script>
								alert('Album ajouté');
								</script>
						  	 	<?php echo '<meta http-equiv="refresh" content="0; url=image.php">';
					   		}
						exit ();
			   	}
				else{
						?>	
							<script>alert('Veuillez remplir tous les champs');</script>

						<?php
						}
				

					echo '<meta http-equiv="refresh" content="0; url=album.php">';
					exit();
					
		}							
									
 //}

?>	
</body>
</html>