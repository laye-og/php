<?php 

    try 
    {
    	 $mois="02";
    $annee="2018";
    $date_debut= $annee."-".$mois."-01";
    $date_fin=$annee."-".$mois."-31";
    $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
    $req1='SELECT * FROM registre ';
    $req2='SELECT * FROM registre where datereel >="'.$date_debut.'"';
    $req3='AND datereel <="'.$date_fin.'"';
   
         } catch (Exception $e) 
         {
            die('erreur'.$e ->getMessage());
   	     }
   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
<!--===============================================================================================-->
<style type="text/css">
body 
{
	background-color: #E5E7E9;
}
table
{
	border:none;
}
td
{
	border:none;
}
th
{
	border-color:none;
}
	.header_top
	{
		position: absolute;
  width: 2200px;
  height: 100px;
  top:;
  z-index: 20;
  padding-top: 0px;
  background: #fff;
  -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
  box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
   position: fixed;
	}
</style>
</head>
<body>
	<?php require_once ('pages/header_topp.php'); ?>
		</div>
			<div class="wrap-table100" style="position: relative; left:300px; -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08); top:120px;">
				<div class="table100 ver5 m-b-110">
					<table data-vertable="ver5">
						<thead>
							<tr class="row100 head">
								<th class="cell100 column1">Prénom & nom</th>
									<th class="cell100 column1">Matricule</th>
									<th class="cell100 column1">Date de naissance</th>
									<th class="cell100 column1">Sexe</th>
									<th class="cell100 column1">Statut du patient</th>
									<th class="cell100 column1">Adresse</th>
									<th class="cell100 column1">Plaintes</th>
									<th class="cell100 column1">Symptômes</th>
									<th class="cell100 column1">Autres explorations</th>
									<th class="cell100 column1">Diagnostic</th>
									<th class="cell100 column1">Traitements/conduite à tenir</th>
									<th class="cell100 column1">Soins infimier</th>
									<th class="cell100 column1">Trie</th>
									<th class="cell100 column1">Orientation/evacuation</th>
									<th class="cell100 column1">Date</th>
									<th class="cell100 column1">Accident</th>
									<th class="cell100 column1">modifier</th>
									<th class="cell100 column1">Supprimer</th>

							</tr>
						</thead>
						<tbody>
							<?php
					 $requete=$bdd->query($req2.$req3);
    while ($donnes=$requete->fetch()) { 
							echo "
			<tr class=\"row100\">
					<td class=\"cell100 column1\">".$donnes['prenom']." ".$donnes['nom']."</td>
					<td class=\"cell100 column1\"><center>".$donnes['matricule']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['age']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['sexe']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['statut']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['adresse']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['plainte']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['symptome']."</center></td>
	                <td class=\"cell100 column1\"><center>".$donnes['exploration']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['diagnostic']."</center></td>
					<td class=\"cell100 column1\"> <center>".$donnes['traitement']."</center></center></td>
					<td class=\"cell100 column1\"><center>".$donnes['soins']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['trie']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['orientation']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['daate']."</center></td>
					<td class=\"cell100 column1\"><center>".$donnes['accidents']."</center></td>
					<td class=\"cell100 column1\"><center><a href=\"formulaire_registre_update.php?id=".$donnes['id']."\"><img src=\"images/paf.png\"></a></center></td>
					<td class=\"cell100 column1\"><center><a href=\"pages/supp.php?id=".$donnes['id']."\"><img src=\"images/delete1.png\"></a></center></td>

				</tr>
				";
			}
				?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>