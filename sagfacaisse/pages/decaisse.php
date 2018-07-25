 <?php 
 
 function validation($val)
{
	if(isset($val)&& !empty($val))
	{
		return true;

	}
	return false;
 
}

 try {
        $BD=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
        
         
	if(validation($_POST['piece']) && validation($_POST['daate']) && validation($_POST['Observation'])&& validation($_POST['Montant'])&& validation($_POST['compte'])&& validation($_POST['datereel']))
	
		{
			if ($_POST['daate']>date('Y-m-d')) {
				?>
				<script>alert('Vous ne pouvez pas utiliser une date dans le futur ');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=../encaissement.php">';
	exit ();

			}
					try {
						$req='INSERT INTO Sortie(Piéce,Daate,Observation,Montant,Compte,datereel) VALUES (?,?,?,?,?,?)';
				
						$requete=$BD->prepare($req);
$requete->execute(array(($_POST['piece']),($_POST['daate']),($_POST['Observation']),($_POST['Montant']),($_POST['compte']),($_POST['datereel'])));
					} catch (Exception $e) {
						 die('erreur'.$e ->getMessage());
					}
					
						if($requete){
						?>
						<script>
							alert('Modification Enregisté');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../index.php">';
						exit ();
        							}
        		 
					
			}


		else{
		?>
	<script>alert('tout les champs ne sont pas remplis');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=../encaissement.php">';
	exit ();
			}
	
		}
catch (Exception $e) {
        die('erreur'.$e ->getMessage());
    }


     ?>