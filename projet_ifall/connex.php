<?php
session_start();
?>
<html><head></head><meta charset="utf-8">
<?php
if(isset ($_POST['ok']))
{
	if(valide($_POST['pseudo'])&& valide($_POST['mdp']) && !empty($_POST['pseudo']) && !empty($_POST['mdp']))  {
	
		
		
		$BD=new PDO('mysql:host=localhost;dbname=tennis','root','');
		$req="SELECT * from journaliste where pseudo=?";
		$req1="SELECT * from entraineur where pseudo=?";
		$operation=$BD->prepare($req);
		$operation->execute(array($_POST['pseudo']));
		$operation1=$BD->prepare($req1);
		$operation1->execute(array($_POST['pseudo']));
		$donnee=$operation->fetch();
		$donnee1=$operation1->fetch();

		
		if ($donnee['mdp'] ==(($_POST['mdp'])))
		{

			$_SESSION['nom']=$donnee['nom'];
			$_SESSION['id']=$donnee['id'];
			$_SESSION['pseudo']=$donnee['pseudo'];
			$_SESSION['prenom']=$donnee['prenom'];
			if (isset($_SESSION['requested_page']) && $_SESSION['requested_page'] != null) {
				$page = $_SESSION['requested_page'];
				$_SESSION['requested_page'] = null;
			  	header('Location: '.$page);
			  
			} else header('Location: news_admin.php');
		}
		if ($donnee1['mdp'] ==(($_POST['mdp'])))
		{

			$_SESSION['nom']=$donnee1['nom'];
			$_SESSION['id']=$donnee1['id'];
			$_SESSION['pseudo']=$donnee1['pseudo'];
			$_SESSION['prenom']=$donnee1['prenom'];
			if (isset($_SESSION['requested_page']) && $_SESSION['requested_page'] != null) {
				$page = $_SESSION['requested_page'];
				$_SESSION['requested_page'] = null;
			  	header('Location: '.$page);
			  
			} else header('Location: indexx.php');
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
