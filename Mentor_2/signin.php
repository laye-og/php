<!DOCTYPE html>
<html>
<head>

	<title>digischool</title>
	<link rel="stylesheet" type="text/css" href="signin2.css">
</head>
<body>
<?php
	    if (isset($_POST['Usernam']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']) && isset($_POST['mail']))
		{
		   $Username=$_POST['Usernam'];
		}
		?> 
			<div class="space4">
				
			</div>
			<div class="background">
				<center>
				<div class="compte">
					<form action="Evaluation.php" method="post">
						<div class="compte-droite">
							<div class="space1"></div>
							N°id <br> <input type="text" id="username" onkeyup="valnom()" name="Username"> <br>
							mot de passe <br>
							<input type="password" name="" id="motdepasse" onkeyup="valpassword()" name="passwd">
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

</body>
</html>