<?php
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
</head>
<?php
if(isset ($_POST['ok']))
{
	if(valide($_POST['pseudo'])&& valide($_POST['mdp']) && !empty($_POST['pseudo']) && !empty($_POST['mdp']))  {
	
		
		
		$BD=new PDO('mysql:host=localhost;dbname=tennis','root','');
		$req="SELECT * from administrateur where pseudo=?";
		$operation=$BD->prepare($req);
		$operation->execute(array($_POST['pseudo']));
		$donnee=$operation->fetch();

		
		if ($donnee['mdp'] ==(($_POST['mdp'])))
		{
			$_SESSION['prenom']=$donnee['prenom'];
			$_SESSION['nom']=$donnee['nom'];
			$_SESSION['pseudo']=$donnee['pseudo'];
		
			if (isset($_SESSION['requested_page']) && $_SESSION['requested_page'] != null) {
				$page = $_SESSION['requested_page'];
				$_SESSION['requested_page'] = null;
			  	header('Location: '.$page);
			  
			} else header('Location: choice.php');
		}
		

			
		else
		{
			$_SESSION['error']=1;
			header('Location: connectadmin.php');
			}
		}
		
	}
	
else
header('Location: connectadmin.php');

	
function valide($val)
{
	return (isset($val) && !empty($val));
}
	
?>
</html>
