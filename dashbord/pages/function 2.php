<?php 
	function lister_compte()
	{
		echo "<option>comptes</option>";
		 try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
    $requete=$bdd->query('SELECT * FROM les_comptes');
    while ($donnes=$requete->fetch()) {
            echo "
                            <option>".$donnes['Nom']."</option>
              
                                                ";
      

    }
  } catch (Exception $e) {
    die('erreur'.$e ->getMessage());
  }
	}


    /*function affiche_tab($date_debut,$date_fin,$nature)
    {
         try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
    if ($nature="encaissement") {
      $requete=$bdd->query('SELECT * FROM Entrée where datereel >=$date_debut and datereel <= $date_fin');  
    }
    else{
        $requete=$bdd->query('SELECT * FROM Sortie where datereel >=$date_debut and datereel <= $date_fin');
    }
    while ($donnes=$requete->fetch()) {
    echo "
            ".$donnes['datereel']."</br>";
      

    }
  } catch (Exception $e) {
    die('erreur'.$e ->getMessage());
  }
    }*/
		
	
 ?>