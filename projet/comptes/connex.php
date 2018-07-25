<?php
session_start();
?>
<html><head></head><meta charset="utf-8">
<?php
if (isset($_POST['type-compte'])) {
	  $form_action=$_POST['type-compte'];
	  //$_POST['type-compte'];
	  echo $form_action."</br>";
	 }
if(isset ($_POST['ok']))
{
	if(valide($_POST['pseudo'])&& valide($_POST['mdp']) && !empty($_POST['pseudo']) && !empty($_POST['mdp']))  {
	
		$BD=new PDO('mysql:host=localhost;dbname=tennis','root','root');
				if ($form_action==="journaliste") {
					$req="SELECT * from journaliste where pseudo=?";
						}
						if ($form_action==="admin") {
					$req="SELECT * from admin where pseudo=?";
						}
		
		$operation=$BD->prepare($req);
		$operation->execute(array($_POST['pseudo']));
		$donnee=$operation->fetch();
		
		
		if ($donnee['mdp'] ==(($_POST['mdp'])))
		{


				if ($form_action==="admin") {
					echo '<meta http-equiv="refresh" content="0; url=admin.php">';
					
						exit ();
				}
			  	if ($form_action==="journaliste") {
					echo '<meta http-equiv="refresh" content="0; url=../news/news_admin.php">';
					
						exit ();
				}
			  
			}else	
			?>
					<script>alert("Les données entrées sont incorrectes");</script>
					<?php
			echo '<meta http-equiv="refresh" content="0; url=connecter.php">';
			
						exit ();
		}
		

			
		/*else
		{
			$_SESSION['error']=1;
			header('Location: connecter.php');
			}
		}
		else {
			$_SESSION['error']=2;
			header('Location: connecter.php');	
		}*/
	}
	
	

	
function valide($val)
{
	return (isset($val) && !empty($val));
}
	
?>
</html>
