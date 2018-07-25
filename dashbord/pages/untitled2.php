<?php
 require_once 'pages/function.php'; 
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
    $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
    $requete=$bdd->query('SELECT * FROM registre where id="'.$_GET['id'].'"');
    while ($donnes=$requete->fetch()) {
      $nom=$donnes['nom'];
      $prenom=$donnes['prenom'];
      $matricule=$donnes['matricule'];
      $age=$donnes['age'];
      $adresse=$donnes['adresse'];
      $plainte=$donnes['plainte'];
      $symptome=$donnes['symptome'];
      $exploration=$donnes['exploration'];
      $accident=$donnes['accidents'];

    }
  }
}