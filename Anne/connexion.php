<?php
session_start();
?>
<html><head></head><meta charset="utf-8">
<?php
if(isset ($_POST['OK']))
{?>
		
		<?php
	if(valide($_POST['email_personne'])&& valide($_POST['mot_de_passe_personne'])) 
	{?>
		<script> alert("Les données entrées sont incorrectes veuillez réessayer !");</script>
		<?php
		
		$BD=new PDO('mysql:host=localhost;dbname=mon_site','root','');
		$req="SELECT * from utilisateur where Email=?";
		$operation=$BD->prepare($req);
		$operation->execute(array($_POST['email_personne']));
		$donnee=$operation->fetch(PDO::FETCH_ASSOC);
		
		if ($donnee['mot_de_passe']===$_POST['mot_de_passe_personne'])
		{
		
			$_SESSION['nom_personne']=$donnee['nom'];
			$_SESSION['email_personne']=$donnee['Email'];
			$_SESSION['prenom_personne']=$donnee['prenom'];
			$_SESSION['date_naissance']=$donnee['date_naissance'];
			header('Location: profil.php');
		}else
{?>
<script>alert("Erreur");</script><?php
header('Location: connexion.php');
}
	
	}
	
}
function valide($val)
{
	if(isset($val) && !empty($val))
	{
		return true;
	}
	return false;
}
	
?>
<html>
<head>
	
	<title>
		
	</title>
		
		<table>
		<tr style="position: absolute ; top:30px; right: 20px">
			<th><a href="inscription.php">INSCRIPTION </a></th>
			<th><a href="connexion.php"> CONNEXION</a></th>
			
		</tr>
	</table>
	

</div><!-- #global -->

</body>
</html>
