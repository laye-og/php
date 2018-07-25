 <?php 
 
 function validation($val)
{
	if(isset($val)&& !empty($val))
	{
		return true;

	}
	return false;
 
}


       
        
        if(isset($_POST['nomtype']))
{
	if(validation($_POST['nomtype']))
	{
					
        		$bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
       			$requete1=$bdd->query('SELECT * FROM comptes');
        		while ($donnes=$requete1->fetch()) {

							if($_POST['nomtype']===$donnes['Nom'])
							{
							echo "
							<script>
							alert('Les doublons ne sont pas autorisé');
						</script>
								";
								$passer="false";
							echo '<meta http-equiv="refresh" content="0; url=../gestion_compte.insc_compte.php?type_compte=Compte">';
								break;
							}else{$passer="true";}
					
					}
					if ($passer==="true") {	
					try {
						 $BD=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
						$req='INSERT INTO comptes VALUES (?)';
				
						$requete=$BD->prepare($req);
						$requete->execute(array($_POST['nomtype']));
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