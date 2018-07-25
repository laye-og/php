<?php 

    try {
    $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
    $req1='SELECT * FROM registre';
   
         } catch (Exception $e) {
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
	background-color: #D1CFCE;
}
th
{
	border-color: 
}
	.header_left
	{
		position: absolute;
  width: 240px;
  height: 100%;
  top: 100px;
  z-index: 20;
  padding-top: 60px;
  background: #fff;
  -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
  box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
	}
	.header_top
	{
		position: absolute;
  width: 1800px;
  height: 100px;
  top: 0;
  z-index: 20;
  padding-top: 0px;
  background: #fff;
  -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
  box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
	}
</style>
</head>
<body>
	
		<div class="header_left" ></div>
		<div class="header_top"></div>
			<div class="wrap-table100" style="position: relative; left:300px; -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08); top:200px;">
				<div class="table100 ver5 m-b-110">
					<table data-vertable="ver5">
						<thead>
							<tr class="row100 head">
								<th class="cell100 column1">Prénom & nom</th>
									<th class="cell100 column1">Matricule</th>
									<th class="cell100 column1">Age</th>
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
									<th class="cell100 column1">Accident</th>
							</tr>
						</thead>
						<tbody>
							<?php
					 $requete=$bdd->query($req1);
    while ($donnes=$requete->fetch()) { 
							echo "
			<tr class=\"row100\">
					<td class=\"cell100 column1\">".$donnes['prenom']." ".$donnes['nom']."</td>
					<td class=\"cell100 column1\">".$donnes['matricule']."</td>
					<td class=\"cell100 column1\">".$donnes['age']."</td>
					<td class=\"cell100 column1\">".$donnes['sexe']."</td>
					<td class=\"cell100 column1\">".$donnes['statut']."</td>
					<td class=\"cell100 column1\">".$donnes['adresse']."</td>
					<td class=\"cell100 column1\">".$donnes['plainte']."</td>
					<td class=\"cell100 column1\">".$donnes['symptome']."</td>
	                <td class=\"cell100 column1\">".$donnes['exploration']."</td>
					<td class=\"cell100 column1\">".$donnes['diagnostic']."</td>
					<td class=\"cell100 column1\">".$donnes['traitement']."</td>
					<td class=\"cell100 column1\">".$donnes['soins']."</td>
					<td class=\"cell100 column1\">".$donnes['trie']."</td>
					<td class=\"cell100 column1\">".$donnes['orientation']."</td>
					<td class=\"cell100 column1\">".$donnes['accidents']."</td>
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