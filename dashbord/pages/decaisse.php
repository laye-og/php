<?php 
 
 function validation($val,$nom)
{
	if(isset($val)&& !empty($val))
	{
		return true;

	}
	else 
	{
		echo "<script>alert('".$nom."');</script>";
		return false;
	}
 
}

 try {
        $BD=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
        
         
	if
		(
		validation($_POST['nom'],"nom") &&
		 validation($_POST['prenom'],"prenom") && 
		 validation($_POST['matricule'],"matricule")&& 
		 validation($_POST['age'],"age")&& 
		 validation($_POST['sexe'],"sexe")&& 
		 validation($_POST['statut'],"statut")&& 
		 validation($_POST['adresse'],"adresse")&&
		 validation($_POST['plainte'],"plainte")&&
		 validation($_POST['symptome'],"symptome")&&
		 validation($_POST['exploration'],"exploration")&& 
		 validation($_POST['diagnostic'],"diagnostic")&& 
		 validation($_POST['traitement'],"traitement")&& 
		 validation($_POST['soins'],"soins")&& 
		 validation($_POST['trie'],"trie")&& 
		 validation($_POST['orientation'],"orientation")&& 
		 validation($_POST['accident'],"accident")&& 
		 validation($_POST['daate'],"daate")&& 
		 validation($_POST['datereel'],"datereel")
		)
		{

			try {
				$req='INSERT INTO registre
				(nom,prenom,matricule,age,sexe,statut,adresse,plainte,symptome,exploration,diagnostic,traitement,soins,trie,orientation,accidents,daate,datereel) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
				
						$requete=$BD->prepare($req);
		$requete->execute(array(
			($_POST['nom']),
			($_POST['prenom']),
			($_POST['matricule']),
			($_POST['age']),
			($_POST['sexe']),
			($_POST['statut']),
			($_POST['adresse']),                                    
			($_POST['plainte']),
			($_POST['symptome']),
			($_POST['exploration']),
			($_POST['diagnostic']),
			($_POST['traitement']),
			($_POST['soins']),
			($_POST['trie']),
			($_POST['orientation']),
			($_POST['accident']),
			($_POST['daate']),
			($_POST['datereel'])
							  ));
					} catch (Exception $e) {
						 die('erreur'.$e ->getMessage());
					}
					
						if($requete){
						?>
						<script>
							alert('Modification Enregisté');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../registre.php">';
						exit ();
        							}
        		 
					
			}


		else{
		?>
	<script>alert('tout les champs ne sont pas remplis');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=../formulaire_registre.php">';
	exit ();
			}
	
		}
catch (Exception $e) {
        die('erreur'.$e ->getMessage());
    }


     ?>