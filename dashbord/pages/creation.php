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
        
        if(isset($_POST['Nom']) && isset($_POST['type_compte'])  && isset($_POST['Adresse']) && isset($_POST['numb']))
	{
	if(validation($_POST['Nom'])&& validation($_POST['type_compte']) && validation($_POST['Adresse'])  && validation($_POST['numb']))
	
		{
					
        		$bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
       			$requete1=$bdd->query('SELECT * FROM les_comptes');
        		while ($donnes=$requete1->fetch()) {

							if($_POST['Nom']===$donnes['Nom'])
							{
							echo "
							<script>
							alert('Les doublons ne sont pas autorisé');
						</script>
								";
								$passer="false";
							echo '<meta http-equiv="refresh" content="0; url=../gestion_compte.insc.php?type_compte=Compte">';
								break;
							}else{$passer="true";}
					
					}
					if ($passer==="true") {	
					try {
						$req='INSERT INTO les_comptes(Nom,Type_compte,adresse,numb) VALUES (?,?,?,?)';
				
						$requete=$BD->prepare($req);
$requete->execute(array(($_POST['Nom']),($_POST['type_compte']),($_POST['Adresse']),($_POST['numb'])));
					} catch (Exception $e) {
						 die('erreur'.$e ->getMessage());
					}
					
						if($requete){
						?>
						<script>
							alert('Creation de compte réussie');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../index.php">';
						exit ();
        							}
        		 
					
			}
}

		else{
		?>
	<script>alert('tout les champs ne sont pas remplis');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=../gestion_compte.insc.php?type_compte=Compte.php">';
	exit ();
			}
	
		}
	}
catch (Exception $e) {
        die('erreur'.$e ->getMessage());
    }


     ?>