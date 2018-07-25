<html>
<head>
<title>Auto complete (auto completion)</title>
<!-- appel du script d'auto completion -->
<script language="JavaScript" src="completion.js"></script>

<script language="JavaScript">
<!--
	// nombre de caractere minimum à tapé avant de lancer la recherche Ajax
	var minimum_caractere = 1;
	// on se moque la hauteur de case
	var case_sensitive    = 0 ;
//-->
</script>
</head>
<body>

<br><br><br>

<!-- debut du code HTML -->
<!-- déclaration du formulaire -->
<form name="completion_form" method="POST" action="une_action.html">

<!-- obliger de laissé un autre champs text invisible pour pallier a la gestion de la touche entrée sur les formulaires -->
<INPUT TYPE="text" NAME="dummy" value="dummy" style="display:none;">

<!-- déclaration du champs dans lequel on va tapé sa recherche -->
Auto completion : <input	type="text"
							class="texte"
							id="completion_text"
							name="completion_text"
							onkeyup="recup_email(event);"
							autocomplete="off">
<BR>
<!-- délacaration du SELECT a choix unique pour la completion -->
<select id="completion_select"
		name="completion_select"
		size="1"
		onclick="recup_mail_click();"
		style="margin-left:110px;border:solid 1px black;border-top:none;display:none;"></select>

<BR>
<input type="button" onclick="completion_form.submit();" value="Envoyer">
<!-- fin du code HTML -->

</form>
</body>
</html>
