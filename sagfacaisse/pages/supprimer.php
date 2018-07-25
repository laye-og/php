 <?php 
 
 function validation($val)
{
	if(isset($val)&& !empty($val))
	{
		return true;

	}
	return false;
 
}


       
        
        if(isset($_POST['Nom']))
{
	if(validation($_POST['Nom']))
	{
				
					try {
				$BD=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
						$req='DELETE * FROM les_comptes WHERE Nom = ?';
				
						$requete=$BD->prepare($req);
						$requete->execute(array($_POST['Nom']));
					} catch (Exception $e) {
						 die('erreur'.$e ->getMessage());
					}
					
						if($requete){
						?>
						<script>
							alert('la creation du type de compte est réussie');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../index.php">';
						exit ();
        							}
        }
    }
        else {
		?>
	<script>alert('veuillez renseigner le type de compte ');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=../gestion_compte.insc_compte.php?type_compte=Compte">';
	exit ();
			}
	}
		
	

	


				
     ?>