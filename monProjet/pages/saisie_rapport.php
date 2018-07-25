  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>---Syst&egrave;me de gestion des arr&ecirc;ts de travail de la SDE---</title>
		<link rel="stylesheet"    href="css/global.css"> 
		<link rel="stylesheet"    href="css/design.css" media="screen" type="text/css" title="Design" /> 	
		<style type="text/css">
		<!--
		a:link    { color: #0000FF;}
		a:visited { color: #0000FF;}
		a:hover   {	color: #FF0000;}
		a:active  {	color: #0000FF;}
		.Style1 { color: #FFFFFF; font-weight: bold; font-size: 20px; }
		.Style8 { color: #FFFFFF; font-weight: bold; }
		-->
		</style>
	</head>
	<body>
		<form name="ChgForm" action = "" method="POST" id="ChgForm"> 
		    <br/> 
			    <table align="center"  bgcolor="#000080" cellpadding="3"  cellspacing="4">
				<tr class="titretab"> <td colspan = "2"><div align="center"><span class="Style1">SAISIE RAPPPORT D'ACTIVIT&Eacute;S</span> </div></td></tr>			
					<tr> <td><div align="left"><span class="Style2 Style8"> Direction </span></div> </td>
						<td>
							<select name="direction" id="direction" required="">	
								<option>--Quelle Direction?--</option>						
								<option>Diourbel</option>								
								<option>HANN</option>
								<option>ICS Mékhé</option>
								<option>Kaolack</option>
								<option>KMS</option>
								<option>Louga</option>
								<option>Mbour</option>
								<option>Ngnith</option>
								<option>RUFISQUE</option>
								<option>Saint-Louis</option>
								<option>Tambacounda</option>
								<option>Thiès</option>
								<option>Ziguinchor</option>
							</select>
						</td>
					</tr>				
					
					<tr> <td><div align="left"><span class="Style2 Style8"> Ann&eacute;e </span></div> </td>
						<td>
							<select name="annee" id="annee" required="">	
								<option>--Quelle Ann&eacute;e?--</option>						
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
							</select>
						</td>
					</tr>	
						
					<tr> <td><div align="left"><span class="Style2 Style8"> Mois </span></div> </td>
						<td>
							<select name="mois" id="mois" required="">	
								<option>--Quelle Mois?--</option>						
								<option value="janvier">Janvier</option>
								<option>F&eacute;vrier</option>
								<option>Mars</option>
								<option>Avril</option>
								<option>Mai</option>
								<option>Juin</option>
								<option>Juillet</option>
								<option>Ao&ucirc;t</option>
								<option>Septembre</option>
								<option>Octobre</option>
								<option>Novembre</option>
								<option>D&eacute;cembre</option>
							</select>
						</td>
					</tr>						
							
					<td><div align="left"><span class="Style2 Style8">Activit&eacute;s </span></div> </td>
					<td>
						<select name="activites" id="activites" required="">	
							<option>--Quelle Activit&eacute;?--</option>						
							<option>Patients</option>
							<option>Agents</option>
							<option>Membre de Familles</option>	
							<option>Personnes ext&eacute;rieures (RSE)</option>					
						</select>
					</td>
				</tr>
				
				<tr><td><div align="left"><span class="Style2 Style8">Consultations</span></div> </td>
					 <td><div align="left"><input name="consultations" type="text"  id="consultations" size="20" ></div> </td>
				</tr>

				<tr><td><div align="left"><span class="Style2 Style8">Orientations vers sp&eacute;cialiste</span></div> </td>
					 <td><div align="left"><input name="orient_specialiste" type="text"  id="orient_specialiste" size="20" ></div> </td>
				</tr>

				<tr><td><div align="left"><span class="Style2 Style8">Examens compl&eacute;mentaires</span></div> </td>
					 <td><div align="left"><input name="examens_compl" type="text"  id="examens_compl" size="20" ></div> </td>
				</tr>

				<tr><td><div align="left"><span class="Style2 Style8">Hospitalisation</span></div> </td>
					 <td><div align="left"><input name="hospitalisation" type="text"  id="hospitalisation" size="20" ></div> </td>
				</tr>		
				
				
				<tr><td><div align="left"><span class="Style2 Style8">Arr&ecirc;ts de travail</span></div> </td>
					 <td><div align="left"><input name="nbre_arrets" type="text" id="nbre_arrets" size="20" ></div> </td>
				</tr>
				
				<tr><td><div align="left"><span class="Style2 Style8">Nombre de b&eacute;n&eacute;ficiaires</span></div> </td>
					 <td><div align="left"><input name="nbre_benficiaires" type="text"  id="nbre_benficiaires" size="20" ></div> </td>
				</tr>				

				<tr><td><div align="left"><span class="Style2 Style8">Visite d'embauche</span></div> </td>
					 <td><div align="left"><input name="visite_emb" type="text"  id="visite_emb" size="20" ></div> </td>
				</tr>

				<tr><td><div align="left"><span class="Style2 Style8">Accidents de travail</span></div> </td>
					 <td><div align="left"><input name="accident_travail" type="text"  id="accident_travail" size="20" ></div> </td>
				</tr>

				<tr><td><div align="left"><span class="Style2 Style8">Maladies professionnelles</span></div> </td>
					 <td><div align="left"><input name="mal_pro" type="text"  id="mal_pro" size="20" ></div> </td>
				</tr>

				<tr><td><div align="left"><span class="Style2 Style8">Pansements</span></div> </td>
					 <td><div align="left"><input name="pansements" type="text"  id="pansements" size="20"  ></div> </td>
				</tr>

				<tr><td><div align="left"><span class="Style2 Style8">Injections</span></div> </td>
					 <td><div align="left"><input name="injections" type="text"  id="injections" size="20"  ></div> </td>
				</tr>

				<tr>
					<p></p>
					<td >
						<input class = "TailleBouton" type= "submit" name="ajout_rapport" value="Enregistrer" /> 
					</td>
					<td >
						<button class = "TailleBouton" onclick="window.location.href='liste_rapport_activites.php'">Annuler</button>
					</td>
				</tr> 
					
			</table>
		</form>
	</body>
</html>