<?php
    $total_consultants     = 0;
    $total_consultations   = 0;
    $total_trie            = 0;
    $total_glyc_capillaire = 0;
    $total_tdr             = 0;
    $total_pansements      = 0;
    $total_injections      = 0;
    $total_orientations    = 0;
    $total_accidents       = 0;
    $total_evacuation      = 0;    
  
    $var_annee     = isset($_GET['annee'])?$_GET['annee']:0; 
    $var_mois      = isset($_GET['mois'])?$_GET['mois']:0;  
	
	$requete = $bdd->prepare("SELECT * FROM tab_bord_mensuel WHERE Activites = ?, Consultants = ?, Consultations = ?, Trie = ?, Glycemie_Capillaire = ?, TDR = ?, Pansements = ?, Nbre_Injections = ?, Orientation_Medecins = ?, Accidents_Travail = ?, Evacuation = ?  ORDER BY Numero ASC");
     
    $requete->execute(array($var_annee, $var_mois));
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>  
	    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />         
	    <title>--Systeme de gestion des arrêts de travail de la SDE--</title>   
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
	</head>
    <script type="text/javascript">
        function imprimer_page()
        {
         window.print();
        }
    </script>
    <style>
        .form-recherche{
            margin-left: 444px;
            margin-top: 30px;
        }
    </style>
        <style type="text/css" media="print">
    tfoot {
        display: table-footer-group;
        visibility: visible;
    }
    thead {
        display: table-header-group;
        visibility: visible;
    }
    </style>
    <body>
        <div class="container-fluid">
            <div class="container">         
                <thead style="background-color: #98FB98;">
                    <tr>
                        <td align="left" colspan="1" ><b> <img src="images/logoqse.jpg" width=90 height=70 ></b><br /><b>
							S18 IS 09.00</b><br /><h3><span style="text-decoration:underline;"><b>SENEGALAISE DES EAUX</b></span></h3>
						</td>
					</tr>
				</thead>
					<tr>
						<td><h4><span style="text-decoration:underline;"><b>SERVICE DE M&Eacute;DECINE D'ENTREPRISE</b></span><br/><span style="text-decoration:underline;"><b>INFIRMERIE DU TRAVAIL</b></span></h4></td> 
						<td colspan="8"></td>
					</tr><br /><br />
					<tr>					
						<center><td><h5><b>TABLEAU DE BORD MENSUEL</b> <br/><b>Mois de <b><?php echo $_GET['mois'] ?> <?php echo $_GET['annee'] ?></b></h5></td></center>
					</tr>      
                <table border="1" width="100%">       
                   <thead>
							<tr style="background-color: #000080;color:white; font-size: 10px;">
                            	<th rowspan="2" style="vertical-align: top;">Activit&eacute;s</th>                                            
                                <th rowspan="2" style="vertical-align: top;">Consultants</th> 
                                 <th rowspan="2" style="vertical-align: top;">Consultations</th>                                            
                                <th rowspan="2" style="vertical-align: top;">Trie</th>                                  
                                <th rowspan="2" style="vertical-align: top;" >Glyc&eacute;mie Capillaire</th> 
                                <th rowspan="2" style="vertical-align: top;">TDR</th>
                                <th colspan="2" style="text-align:center;">Pansements</th> 								
                                <th rowspan="2" style="vertical-align: top;">Nbre Injections</th>  
                                <th rowspan="2" style="vertical-align: top;">Orientation aupr&egrave;s des M&eacute;decins</th>  
                                <th rowspan="2" style="vertical-align: top;">Accidents du Travail et premiers soins</th>  
                                <th colspan="2" style="vertical-align: top;">Evacuation</th>
                            </tr>							
						</thead>
                  <tbody>
						<?php while($tab = $requete->fetch()){ ?>
							<tr style="font-size: 10px;">                                                										
                                <td style="font-size:11px;text-align:center;"><?php echo $tab['Activites'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['Consultants'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['Consultations'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['Trie'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['Glycemie_Capillaire'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['TDR'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['Pansements'] ?></td>
							    <td style="text-align:center;"><?php echo $tab['Nbre_Injections'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['Orientation_Medecins'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['Accidents_Travail'] ?></td>
                                <td style="text-align:center;"><?php echo $tab['Evacuation'] ?></td>                               
                            </tr>
						<?php
							$total_consultants     = $total_consultants     +  $tab["Consultants"];
                            $total_consultations   = $total_orientations    +  $tab["Consultations"];
                            $total_trie            = $total_trie            +  $tab["Trie"];
                            $total_glyc_capillaire = $total_glyc_capillaire +  $tab["Glycemie_Capillaire"];
                            $total_tdr             = $total_tdr             +  $tab["TDR"];
                            $total_pansements      = $total_pansements      +  $tab["Pansements"];
                            $total_injections      = $total_injections      +  $tab["Nbre_Injections"];
                            $total_orientations    = $total_orientations    +  $tab["Orientation_Medecins"];
                            $total_accidents       = $total_accidents       +  $tab["Accidents_Travail"];
                            $total_evacuation      = $total_evacuation      +  $tab["Evacuation"];
                        
						} ?>		
						</tbody>
                    <tr style="font-size: 11px;">
                            <td colspan="1" style="text-align: left; font-weight: bold; ">Total </td>                                         
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_consultants; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_consultations; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_trie; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_glyc_capillaire; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_tdr; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_pansements; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_injections; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_orientations; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_maladies; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_accidents; ?></td>
                            <td style="text-align:center;font-weight: bold;"><?php echo $total_evacuation; ?></td>                         
                        </tr>   <br /><br />
				</table>
				 <table border="0" width="100%">
                    <tr>
						<td  colspan = 1 align="left" > <span style="text-decoration:underline;"><b>Commentaires: </b></span></td>
					</tr>
					<tr>
						<td  colspan =  align="left" > Etabli par: <b><?php echo $prenom_medecin. ' ' . $nom_medecin; ?></b></td>
						<td  colspan = 9 align="right" ><?php ; $date = date("d/m/Y"); echo "Date: ".$date; ?> </td>
					</tr>
					<tr>
						<td  colspan = 9 align="right" ><?php ; $date = date("d/m/Y"); echo "Date: ".$date; ?> </td>
					</tr>

					<tr>
						<td  colspan = 7 align="right" > Visa:  </td>
					</tr><br /><br /><br /><br /><br />
				
	               
                </table><br /><br /><br /><br /><br />
               
            </div>
        </div>
    </body>
</html>
