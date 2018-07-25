<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
	</head>
<body>
        <?php
	    if (isset($_POST['Usernam']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']) && isset($_POST['mail']))
		{
		   $Username=$_POST['Usernam'];
		}
		?>  
		<div class="container">
			<header >
				<div >
					<h1>QCM</h1>
				</div>
			</header>
			<hr>
			<div id="middle">
				  <center>
				  	<div class="log">
						<form action="Evaluation.php" method="post"> 
						    <label id="lab">Adresse email ou Nom utilisateur</label><br>
							<input type="text" class="login" placeholder="Nom" id="username" onkeyup="valnom()" name="Username"><br>
							<label id="lab">Mot de passe</label><br>
							<input type="password" class="login" id="motdepasse" onkeyup="valpassword()" name="passwd"><br>
							<div id="errorPasswd"></div>
						    <input type="Submit" value="Inscription"><br>
						    <a href="Inscription.php">Pas encore de compte? Inscription</a>
						</form>
					</div>
				  </center>
			</div>
		</div>
		
		
</body>
</html>