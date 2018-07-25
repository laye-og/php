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
		 validation($_POST['matricule'],"matricule")&& 
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
			$ok="non";
			$matriculee=substr($_POST['matricule'],0,5);
			    try {
			    $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
			    $req1='SELECT * FROM Feuil1';
			    	 $requete=$bdd->query($req1);
			    while ($donnes=$requete->fetch()) 
			    	{
			    		if ($donnes['Matricule']==$matriculee)
			    		{
			    			$nom=$donnes['Nom'];
			    		    $prenom=$donnes['Prénom'];
			    		    $age=$donnes['DateNaiss'];
			    			$sexe=$donnes['Sexe'];
			    			$adresse=$donnes['Adresse'];
			    			$matricule=$donnes['Matricule'];
			    			$ok="oui";
			    			break;
			    		}
			    	}
			   
			         } catch (Exception $e) {
			            die('erreur'.$e ->getMessage());
			  }

			 if ($ok=="oui") {
			
			try {
				$req='INSERT INTO registre
				(nom,prenom,matricule,age,sexe,statut,adresse,plainte,symptome,exploration,diagnostic,traitement,soins,trie,orientation,accidents,daate,datereel) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
				
						$requete=$BD->prepare($req);
		$requete->execute(array(
			($nom),
			($prenom),
			($matricule),
			($age),
			($sexe),
			('agent'),
			($adresse),                                    
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
					
						if($requete && $ok==="oui"){
						?>
						<script>
							alert('Modification Enregisté');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../registre.php">';
						exit ();
        							}
        		 
					
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