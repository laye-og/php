<?php
session_start();
?>
<html>
<?php 
if (isset($_POST['type-compte'])) {
	  $form_action=$_POST['type-compte'];
}
 ?>
<head>
<title>Liens</title>
<meta charset="utf-8">
</head>
<body>
<?php
$BD= new PDO("mysql:host=localhost;dbname=tennis",'root','');
if(isset($_POST['ok']))
{
	if(validation($_POST['pseudo']) && validation($_POST['nom']) && validation($_POST['prenom']) && validation($_POST['ddn']) && validation($_POST['mdp']) && validation($_POST['confirmer']))
		$type=$_POST['typeCompte'];
	{
		if($_POST['mdp']===$_POST['confirmer'])
		{		


			if(!is_inmy_db($BD,$_POST['pseudo']) )
			{
						$req='INSERT INTO '$form_action'(pseudo,nom,prenom,ddn,mdp) VALUES(?,?,?,?,?)';
						$requete=$BD->prepare($req);
						$requete->execute(array($_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['ddn'],($_POST['mdp'])));
						if($requete){
						?>
						<script>
							alert('Inscription réussie');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=connecter.php">';
						exit ();
        							}
        		
					
			}


		else{
		?>
		<script>alert('Les mots de passe entrés sont différents');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=inscription.php">';
	exit ();
			}
	
		}
	}
}


function is_inmy_db(PDO $base,$mail)
{
      
      $requet='SELECT id FROM journaliste where pseudo=?';
      $r = $base->prepare($requet);
      $r->execute(array($pseudo));
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
