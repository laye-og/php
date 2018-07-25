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
        
        if(isset($_POST['nomtype']))
{
	if(validation($_POST['nomtype']))
	
	{
					try {
						$req='INSERT INTO comptes VALUES (?)';
				
						$requete=$BD->prepare($req);
						$requete->execute(array($_POST['nomtype']));
					} catch (Exception $e) {
						 die('erreur'.$e ->getMessage());
					}
					
						if($requete){
						?>
						<script>
							alert('Inscription réussie');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../index.php">';
						exit ();
        							}
        		 
					}
			


		else{
		?>
	<script>alert('Les mots de passe entrés sont différents');</script>
		<?php
	//echo '<meta http-equiv="refresh" content="0; url=choice_connex.php">';
	exit ();
			}
	
		}
	}catch (Exception $e) {
        die('erreur'.$e ->getMessage());
    }


     ?>