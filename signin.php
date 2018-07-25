<!DOCTYPE html>
<html><head>

	 
	<title>digischool</title>
	<link rel="stylesheet" type="text/css" href="signin2.css">
</head>
<body>

			<div class="space4">
				
			</div>
			<div class="background">
				<center>
				<div class="compte">
						<div class="compte-droite">
							<form action="signin.php">
							<div class="space1"></div>
							N°id <br> <input type="text" name="numb"> <br>
							mot de passe <br>
							<input type="password" name="pwd" value="********">
							<a href=""> <br>
								<input type="submit" name="" value="sign in">
							<br> mot de passe oublié </a> <br>
							
						</div>
						</form>
						<div class="compte-guauche">
							<div class="space2"></div>
						<u> DIGIschool</u> 	<br>
								
				</div>
				</center>
			</div>
	</div>
<?php 
		if (isset($_REQUEST['numb']) && isset($_REQUEST['pwd'])) {
				$pwd=$_REQUEST['pwd'];
				$numb=$_REQUEST['numb'];
				$gpwd='passer123';
				$gnumb='laye';
				if (($pwd===$gpwd) && ($numb===$gnumb)) {
					echo "voulez vous sauvegarder votre mot de passe <a href=adminresto.php>oui</a>
					</br>
					<a href=adminresto.php>non</a>"
					;
				}
			 }

	 ?>
</body>
</html>