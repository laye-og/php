<?php
session_start();
?>
<html><head></head><meta charset="utf-8">
<?php
if(isset ($_POST['ok']))
{
	if(valide($_POST['email_personne'])&& valide($_POST['mot_de_passe_personne']) && !empty($_POST['email_personne']) && !empty($_POST['mot_de_passe_personne']))  {
	
		
		
		$BD=new PDO('mysql:host=localhost;dbname=mon_site','root','');
		$req="SELECT * from utilisateur where Email=?";
		$operation=$BD->prepare($req);
		$operation->execute(array($_POST['email_personne']));
		$donnee=$operation->fetch();
		
		if ($donnee['mot_de_passe'] ==(sha1($_POST['mot_de_passe_personne'])))
		{

			$_SESSION['nom_personne']=$donnee['nom'];
			$_SESSION['id']=$donnee['id'];
			$_SESSION['email_personne']=$donnee['Email'];
			$_SESSION['prenom_personne']=$donnee['prenom'];
			if (isset($_SESSION['requested_page']) && $_SESSION['requested_page'] != null) {
				$page = $_SESSION['requested_page'];
				$_SESSION['requested_page'] = null;
			  	header('Location: '.$page);
			  
			} else header('Location: profil.php');
		}
			
		else
		{
			$_SESSION['error']=1;
			header('Location: connecter.php');
			}
		}
		else {
			$_SESSION['error']=2;
			header('Location: connecter.php');	
		}
	}
	
else
header('Location: connecter.php');

	
function valide($val)
{
	return (isset($val) && !empty($val));
}
	
?>
</html>
