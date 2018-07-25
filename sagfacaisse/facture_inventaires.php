<?php 
if (isset($_POST['date_debut']) && isset($_POST['date_fin']) && isset($_POST['type_demande']) ) 
{
    $date_debut=$_POST['date_debut'];
    $date_fin=$_POST['date_fin'];
    $type_demande=$_POST['type_demande'];
    echo $type_demande;
    try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
    if ($_POST['type_demande']=="inventaires")
     {
    $req1='SELECT * FROM Entrée where daate >="'.$date_debut.'"';
    $req3='SELECT * FROM Sortie where daate >="'.$date_debut.'"';

    }
        } catch (Exception $e) {
            die('erreur'.$e ->getMessage());
  }
}else{echo "flksenflnfkzelf";}
   ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style_facture.css" media="all" />
  </head>

    <style type="text/css">
      .button
      {
        height: 50px; 
        width: 200px; 
        position:relative; 
        left: 300px;
        font-size: 25px;
        background-color: green;
        font-family: courier New header;
      }
       a
      {
        color:white;
        text-decoration: none;
      }
    </style>
    <script>
function myFunction() {
    window.print();
  }
  
</script>
  <body onload="myFunction()">
    
<div id=""></div>
 <header class="clearfix">
 <div id="logo">
        <img style="width:250px;" src="images/logo.png">
      </div>
      <h1>Facture</h1>
      <div id="project">
         <div>Groupe Sagfa</div>
        <div>Sicap liberté 3 <br />Dakar,Senegal</div>
        <div>774497749</div>
        <div><a href="mailto:Sagfa28@gmail.com">Sagfa28@gmail.com</a></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
              <th class=\"service\">Piéce</th>
            <th class=\"desc\">DESCRIPTION</th>
            <th>Montant</th>
            <th>Date</th>
            <th>Compte</th>
            <?php 
             $req2='AND daate <="'.$date_fin.'"';
             $somme=0;
     $requete=$bdd->query($req1.$req2);
    while ($donnes=$requete->fetch()) {
      $somme+=$donnes['Montant'];
    echo "       
            <input type=\"hidden\" name=\"date_debut\" value=\"".$date_debut."\">
             <input type=\"hidden\" name=\"date_fin\" value=\"".$date_fin."\">
              <input type=\"hidden\" name=\"type_demande\" value=\"".$type_demande."\">
          </tr>
        </thead>
        <tbody>
          <tr>

            <td class=\"service\">".$donnes['Piéce']."</td>
            <td class=\"desc\">".$donnes['Observation']."</td>
            <td class=\"unit\">".$donnes['Montant']." fcfa</td>
            <td class=\"qty\">".$donnes['Daate']."</td>
            <td class=\"total\">".$donnes['Compte']."</td>
          </tr>
          <tr>
          ";
             }
             echo "<td colspan=\"4\" class=\"grand total\">TOTAL</td>
            <td class=\"grand total\">".$somme."</td>
          </tr>";
             ?>
        </tbody>
      </table>
    </main>
  </body>
</html>