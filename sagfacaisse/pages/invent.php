<?php 
if (isset($_POST['date_debut']) && isset($_POST['date_fin']) && isset($_POST['type_demande']) ) 
{
    $date_debut=$_POST['date_debut'];
    $date_fin=$_POST['date_fin'];
    try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
    if ($_POST['type_demande']=="encaissements")
     {
    $req1='SELECT * FROM Entrée where datereel >="'.$date_debut.'"';
    }
    else{
      $req1='SELECT * FROM Sortie where datereel >="'.$date_debut.'"';
        }
    
    $req2='AND datereel <="'.$date_fin.'"';
     $requete=$bdd->query($req1.$req2);
    while ($donnes=$requete->fetch()) {
    echo "
            ".$donnes['Observation']."</br>";
      

                }
        } 
          catch (Exception $e) {
            die('erreur'.$e ->getMessage());
  }
}else{echo "flksenflnfkzelf";}
   ?>
