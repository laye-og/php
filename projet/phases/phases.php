<?php
   if(!isset($_GET["i"])){
    $i=1;
   }else{
    $i = (int)$_GET["i"];
   }
// switch ($i) {
// 	case 1:$Phase='Phase1'break;
// 	case 2:$Phase='Phase2'break;
// 	case 3:$Phase='Phase3'break;
// 	case 4:$Phase='Phase4'break;
// 	case 5:$Phase='Phase5'break;
// 	case 6:$Phase='Phase6'break;
// 	case 7:$Phase='Phase7'break;	
// }
  $phase="Phase".$i;
$servername = "localhost";
$username = "root";
$password = "root";
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=tennis', 'root', 'root',
$pdo_options);
$req="SELECT Nom, $phase FROM phases where $phase!=''";
$requette = $bdd->query($req);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
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
</head>
<body>
	<?php 
include 'baniere.php';
 ?>
 
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<center><h1>la <?php echo $phase ?></h1></center><br>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">joueur1</th>
									<th class="cell100 column2">joueur2</th>
									<th class="cell100 column3">Score1</th>
									<th class="cell100 column4">Score2</th>

								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
									<?php
																while($resultat = $requette->fetch()){
																	$resultat2 = $requette->fetch();
									?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $resultat['Nom']; ?>   </td>
									<td class="cell100 column2"><?php echo $resultat2['Nom']; ?></td>
									<td class="cell100 column3"><?php echo $resultat[$phase]; ?></td>
									<td class="cell100 column4"><?php echo $resultat2[$phase]; ?> </td>
								</tr>
									<?php
		                            }
                                //$reponse->closeCursor();
													}
									catch(Exception $e)
								{
								die('Erreur : '.$e->getMessage());
									}?>
							</tbody>
						</table>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>
	<?php 
if ($i>1) {
 ?>
<a href="phases.php?i=<?php echo $i-1; ?>">précédent</a>
 <?php
} 
if ($i<7) {
	?>
<a href="phases.php?i=<?php echo $i+1; ?>">suivant</a>
<?php
}
?>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>