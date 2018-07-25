<?php
session_start();
?>
<html>
<head>
<title>Liens</title>
<meta charset="utf-8">
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0">
<tr>
<th>MON SITE</th>
<th>URL</th>
</tr>
<?php
$BD= new PDO("mysql:host=localhost;dbname=mon_site",'root','');
if(isset($_POST['ok']))
{
	if(validation($_POST['nom_personne']) && validation($_POST['prenom_personne']) && validation($_POST['date_naissance']) && validation($_POST['email_personne']) && validation($_POST['mot_de_passe_personne']) && validation($_POST['confirmer']))
	{
		if($_POST['mot_de_passe_personne']===$_POST['confirmer'])
		{		


			if(!is_inmy_db($BD,$_POST['email_personne']))
			{
						$req='INSERT INTO utilisateur(nom,prenom,date_naissance,Email,mot_de_passe) VALUES(?,?,?,?,?)';
						$requete=$BD->prepare($req);
						$requete->execute(array($_POST['nom_personne'],$_POST['prenom_personne'],$_POST['date_naissance'],$_POST['email_personne'],sha1($_POST['mot_de_passe_personne'])));
						if($requete){
						?>
						<script>
							alert('Inscription réussie');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=profil.php">';
						exit ();
        				}
        		
					
			}else
			?>
			<script>alert('Votre email est déjà existant dans la base données');</script>
			<?php
			echo '<meta http-equiv="refresh" content="0; url=inscription.php">';
			exit ();
		}else
		?>
		<script>alert('Les mots de passe entrés sont différents');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=inscription.php">';
	exit ();
	}
	else
	?>
	<script>alert('Veuillez remplir tous les champs');</script>
	<?php
	echo '<meta http-equiv="refresh" content="0; url=inscription.php">';
	
}

function is_inmy_db(PDO $base,$mail)
{
      
      $requet='SELECT id FROM utilisateur where Email=?';
      $r = $base->prepare($requet);
      $r->execute(array($mail));
      $resultat=$r-> rowCount();
   
      if($resultat!=0)
      {
            return true;
      }
      return false;

}
 
 function validation($val)
{
	if(isset($val)&& !empty($val))
	{
		return true;

	}
	return false;
 
}
?>
</tr>
</table>
</body>
</html>
