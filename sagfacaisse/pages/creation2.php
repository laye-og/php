 <?php 
 function FunctionName($value)
 {
 	# code...

     try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
    $requete=$bdd->query('SELECT * FROM $value');
    while ($donnes=$requete->fetch()) {
            echo "
                            <option>".$donnes['Nom']."</option>
              
                                                ";
      

    }
  } catch (Exception $e) {
    die('erreur'.$e ->getMessage());
  }

}
 function validation($val)
{
	if(isset($val)&& !empty($val))
	{
		return true;

	}
	return false;
 
}
$passer="true";
 try {
        $BD=new PDO('mysql:host=localhost;dbname=test','root','root');
        
        if(isset($_POST['heureDebut']) && isset($_POST['heureFin'])  && isset($_POST['label'])  && isset($_POST['jour']))
	{
	if(validation($_POST['heureDebut'])&& validation($_POST['heureFin']) && validation($_POST['label'])&& validation($_POST['jour'])&& validation($_POST['classe']) && $_POST['jour']!="jour")
	
		{
					
        		$bdd=new PDO('mysql:host=localhost;dbname=test','root','root');
       			$requete1=$bdd->query('SELECT * FROM horaire');
        		while ($donnes=$requete1->fetch()) {

							if($_POST['heureDebut']===$donnes['heureDebut'] && $_POST['jour']===$donnes['jour'] && $_POST['classe']===$donnes['classe'])
							{
							echo "
							<script>
							alert('ce crénaux est deja reservé');
						</script>
								";
								$passer="false";
							echo '<meta http-equiv="refresh" content="0; url=../gestion_compte_shedule_admin.php?type_compte=Compte">';
								break;
							}
							else
								{
									$passer="true";
								}
					
					}
					if ($passer==="true") {	
					try {
						$req='INSERT INTO horaire(heureDebut,heureFin,label,jour,classe) VALUES (?,?,?,?,?)';
				
						$requete=$BD->prepare($req);
$requete->execute(array(($_POST['heureDebut']),($_POST['heureFin']),($_POST['label']),($_POST['jour']),($_POST['classe'])));
					} catch (Exception $e) {
						 die('erreur'.$e ->getMessage());
					}
					
						if($requete){
						?>
						<script>
							alert('Horaire enregistré');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../gestion_compte_shedule_admin.php?type_compte=Compte">';
						exit ();
        							}
        		 
					
			}
}

		else{
		?>
	<script>alert('tout les champs ne sont pas remplis');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=../gestion_compte_shedule_admin.php?type_compte=Compte">';
	exit ();
			}
	
		}
	}
catch (Exception $e) {
        die('erreur'.$e ->getMessage());
    }


     ?>