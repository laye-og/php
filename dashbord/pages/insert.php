 <?php 
 require_once("config.php");
 function validation($val)
{
	if(isset($val)&& !empty($val))
	{
		return true;

	}
	return false;
 
}


          
        if(isset($_POST['nomtype'])&&isset($_POST['type']))
{
	if(validation($_POST['nomtype'])&&validation($_POST['type']))
	{	
		$bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
       			$requete1=$bdd->query('SELECT * FROM creation');
        		while ($donnes=$requete1->fetch()) {

							if($_POST['nomtype']===$donnes['nomtype']&& $_POST['type']===$donnes['type'])
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
						 $BD=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
						$req='INSERT INTO creation(nomtype,type) VALUES (?,?)';
				
						$requete=$BD->prepare($req);
						$requete->execute(array($_POST['nomtype'],$_POST['type']));
					} catch (Exception $e) {
						 die('erreur'.$e ->getMessage());
					}
					
						if($requete){
						?>
						<script>
							alert('Opération Enregistrée');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../gestion_compte.insc_compte.php?type_compte='.$_POST['type'].'">';
						exit ();
        							}
    }
        else {
		?>
	<script>alert('veuillez renseigner le nom de la creation  ');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=../gestion_compte.insc_compte.php?type_compte=Compte">';
	exit ();
			}
	
		}
	
	}

	


				
     ?>