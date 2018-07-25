<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Evaluation </title>
</head>
<body >
 <?php
	    if (isset($_POST['Username']) && isset($_POST['passwd']))
		{
		   $Username=$_POST['Username'];
		}
		?>  

<center><h1>the laye show</h1></center>
<h2>Bonjour, <?php echo "$Username";?></h2>
<hr>
 	  <form action="Evaluation.php" method="post">
       <h3> Q1:Qui est le meilleur codeur de la classe ?</h3>
		    <input type="text" id="answertext" name="answertext">
		<hr>
		<h3>Q2:Quell est la meilleur equipe du monde </h3>
		     <input type="text" id="answertext" name="answertext">
		<hr>     
		<h3>Q3:quel est le club rival de manu </h3>
		    <input type="text" id="answertext" name="answertext">
		<hr>
		<h3>Q4:manu est elle la meilleur equipe du monde ?</h3>
		     <input type="checkbox" id="answercheck" name="answercheck">Oui
		     <input type="checkbox" id="answercheck" name="answercheck">Non
		<hr>
		<h3>Q5:aziz ndiaye est il nulllllll au foot ?</h3>
		     <input type="checkbox" id="answercheck" name="answercheck">Oui
		     <input type="checkbox" id="answercheck" name="answercheck">Non
		     <hr>

    <center> <input type="submit" value="Valider" /></center>
    </form>
</body>
</html>