<?php
session_start();
?>
<html>
<?php 
if (isset($_POST['type-compte'])) {
	  $form_action=$_POST['type-compte'];
	  //$_POST['type-compte'];
}

 ?>

<head>
<title>Liens</title>
<meta charset="utf-8">
</head>
<body>
<?php
if(isset($_POST['oki']))
{
	echo '<meta http-equiv="refresh" content="0; url=../news/lister.php">';
						exit ();
}
$BD= new PDO("mysql:host=localhost;dbname=Etudiants",'root','root');
if(isset($_POST['ok']))
{
	if(validation($_POST['Numb']) && validation($_POST['Nom']) && validation($_POST['Prenom']) && validation($_POST['Adresse']) )
	
	{						
		//if (isset($_POST['ok']) {
		$passer=true;
		
							try {
        		$bdd=new PDO('mysql:host=localhost;dbname=Etudiants','root','root');
       			$requete=$bdd->query('SELECT * FROM Etudiant');
        		while ($donnes=$requete->fetch()) {

							if($_POST['Numb']===$donnes['Numb'])
							{
							echo "
							<script>
							alert('Les doublons ne sont pas autorisé');
						</script>
								";
								$passer=false;
							echo '<meta http-equiv="refresh" content="0; url=Etudiantm.php">';
								
							}
						}
        				}catch (Exception $e) {
        die('erreur'.$e ->getMessage());

			}
				if ($passer==true) {
						# code...
						
			$req='INSERT INTO Etudiant(Numb,nom,prenom,adresse) VALUES(?,?,?,?)';
				
						$requete=$BD->prepare($req);
						$requete->execute(array($_POST['Numb'],$_POST['Nom'],$_POST['Prenom'],$_POST['Adresse']));
						if($requete){	
						?>
						<script>
							alert('Inscription réussie');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=Etudiantm.php">';
						exit ();
        							}
        		 
				}	
			}

		else{
		?>
		<script>alert('vous devez renseignez tout les champs ');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=Etudiant.php">';
	exit ();
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
<style type="text/css">
.btn
{
background-color: green;
}
.btn-primary
{
background-color: green;
}

</style>
</tr>
</table>
</body>
</html>
