<html>
<head>
<meta charset="utf-8">
<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="code.php">
  <table width="420" border="0">
    <tr>
      <td width="169" bgcolor="#CCFF00"><label>
        <input name="rechercher" type="submit" id="rechercher" value="Rechercher" />
      </label></td>
      <td width="369" bgcolor="#CCFF00"><label>
        <input name="t_rechercher" type="text" id="t_rechercher" />
        <span class="Style4">      Recherche par nom</span> </label></td>
    </tr>
    <tr>
      <td>Pseudo</td>
      <td><label>
        <input name="PseudoJoueur" type="text" id="t_pseudo" />
      </label></td>
    </tr>
    <tr>
      <td>Nom</td>
      <td><label>
        <input name="NomJoueur" type="text" id="t_nom" />
      </label></td>
    </tr>
    <tr>
      <td>Prénom</td>
      <td><label>
        <input name="PrenomJoueur" type="text" id="t_prenom" />
      </label></td>
    </tr>
    <tr>
      <td>Classement</td>
      <td><label>
        <input name="ClassementJoueur" type="text" id="t_clas" />
      </label></td>
    </tr>
    <tr>
      <td>Nationnalité</td>
      <td><input name="NationaliteJoueur" type="text" id="t_nat" /></td>
    </tr>
    <tr>
      <td>Sexe</td>
      <td><input type="radio" name="SexeJoueur" value="masculin" checked>Masculin</td>
     <td><input type="radio" name="SexeJoueur" value="feminin">Féminin</td>
     <td id="erreurSexe"><br/></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        
      <input name="ajouter" type="submit" id="ajouter" value="ajouter" />
      
      </label></td>
    </tr>
  </table>
  <p> </p>
</form>
<table width="630" align="left" bgcolor="#CCCCCC">
<tr >
 
<td width="152">Nom</td>
<td width="66">Prénom</td>
<td width="248">Classement</td>
<td width="42">Nationnalite</td>
</tr>

<tr bgcolor="#EEEEEE">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>
<td><? echo $row[3]  ?></td>
</tr>

<tr bgcolor="#FFCCCC">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>
<td><? echo $row[3]  ?></td>
</tr><undefined></undefined>

</table>
</body>
</html>