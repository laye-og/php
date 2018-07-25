			
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

					         
        if(isset($_GET['id']))
{
	if(validation($_GET['id']))
	{	
				try {
	 $BD=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
			$req='DELETE From  registre where id = ?';
		
				
						$requete=$BD->prepare($req);
						$requete->execute(array($_GET['id']));
					} catch (Exception $e) {
						 die('erreur'.$e ->getMessage());
					}
					
						if($requete){
						?>
						<script>
							alert('Opération Enregistrée');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=../registre.php">';
						exit ();
        							}
    }
        else {
		?>
	<script>alert('acces non autorisé');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=../registre.php">';
	exit ();
			}
	
		}
	
	

	


				
     ?>