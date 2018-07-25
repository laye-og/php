<?php 
		require_once('pages/tab_bord_recup.php');
		if (isset($_POST['mois']) && isset($_POST['annee']))
		 {
			$mois=$_POST['mois'];
			$annee=$_POST['annee'];
		 }
		 else { die('acces denied');}
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style_tab.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>
<script>
function myFunction() {
    window.print();
  }
</script>
<style type="text/css">
	.wrap
	{
		position: absolute;
		top:250%;
		left: 120%;
		margin-top: -86px;
		margin-left: -89px;
		text-align: center;
	}
	a {
    -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
    display: block;
    margin: 20px auto;
    max-width: 180px;
    text-decoration: none;
    border-radius: 4px;
    padding: 20px 30px;
}

a.button {
    color: rgba(255, 255, 255, 0.85);
    box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset;
}

a.button:hover {
    color: black;
    box-shadow: black 0 0px 0px 2px inset;
}

a.button2 {
     color: white;
    box-shadow: black 0 80px 0px 2px inset;
}

a.button2:hover {
    color: black;
    box-shadow: grey 0 80px 0px 2px inset;
}
</style>
  <body>
	<div id="page-wrap">
		<div id="identity" style="position: absol">
		<textarea id="header">TABLEAU DE BORD MENSUEL</textarea>
		<textarea id="header" style="position: relative;bottom: 40px;">MOIS</textarea>
           <h3 id="address"  style="position: relative;bottom:20px;"> <u>SENEGALAISE DES EAUX </u></h3>  <br>
		  <h3 id="address" style="position: relative;right: 400px;"><u>SERVICE DE MEDECINE D'ENTREPRISE </u></h3> <br>
		  <h4 id="address" style="position: relative;right: 800px; top:5px;"><u>INFIRMERIE DU TRAVAIL </u></h4>
		 

            <div id="logo">
            </div>
		
		</div>
		
		<div style=" position: relative; bottom: 100px;" >
		<table id="items">
		
		  <tr>
		      <th>Patients / Activités </th>
		      <th>Consultants</th>
		      <th>Consultation</th>
		      <th>Trie</th>
		      <th>Glycemie <br> Capillaire</th>
		      <th>TDR</th>
		      <th>Pansements</th>
		      <th> Nbre <br> injections </th>
		      <th> Orientation <br> auprés  <br> des Médecins   </th>
		      <th> Accidents  <br> de travail  <br> et premier soins   </th>
		        <th>Evacuation</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><strong>agent</strong></td>
		      <td class="description">
		   		<center><?php getconsultant($mois,$annee,'agent') ?> </center>
		      </td>
		      <td>
		      	<center><?php // getconsultation($mois,$annee,'agent') ?> </center>
		      </td>
			  <td>
			  	<center><?php gettrie($mois,$annee,'agent') ?> </center>
			  </td>
		      <td>
		      	<center><?php getglycemie($mois,$annee,'agent') ?> </center>
		      </td>
		       <td>
		      	<center><?php gettdr($mois,$annee,'agent') ?> </center>
		      </td>
		       <td>
		      	<center><?php getpansement($mois,$annee,'agent') ?> </center>
		      </td>
		       <td>
		      	<center><?php getinjections($mois,$annee,'agent') ?> </center>
		      </td>
		       <td>
		      <center><?php getorientation($mois,$annee,'agent') ?> </center>
		      </td>
		       <td>
		       <center><?php total_accidents($mois,$annee) ?></center>
		      </td>
		  </tr>
		 <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><strong>Mbres de Famille</strong></td>
		       <td class="description">
		   		<center><?php getconsultant($mois,$annee,'Famille') ?> </center>
		      </td>
		      <td>
		      	<center><?php //getconsultation($mois,$annee,'Famille') ?> </center>
		      </td>
			  <td>
			  	<center><?php gettrie($mois,$annee,'Famille') ?> </center>
			  </td>
		      <td>
		      	<center><?php getglycemie($mois,$annee,'Famille') ?> </center>
		      </td>
		       <td>
		      	<center><?php gettdr($mois,$annee,'Famille') ?> </center>
		      </td>
		       <td>
		      	<center><?php getpansement($mois,$annee,'Famille') ?> </center>
		      </td>
		       <td>
		      	<center><?php getinjections($mois,$annee,'Famille') ?> </center>
		      </td>
		       <td>
		      		<center><?php getorientation($mois,$annee,'Famille') ?> </center>
		      </td>
		       <td>
		       <center>00</center>
		      </td>
		  </tr>
		 <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><strong>RSE</strong></td>
		      <td class="description">
		   		<center><?php getconsultant($mois,$annee,'Rse') ?> </center>
		      </td>
		      <td>
		      	<center><?php //getconsultation($mois,$annee,'Rse') ?> </center>
		      </td>
			  <td>
			  	<center><?php gettrie($mois,$annee,'Rse') ?> </center>
			  </td>
		      <td>
		      	<center><?php getglycemie($mois,$annee,'Rse') ?> </center>
		      </td>
		       <td>
		      	<center><?php gettdr($mois,$annee,'Rse') ?> </center>
		      </td>
		       <td>
		      	<center><?php getpansement($mois,$annee,'Rse') ?> </center>
		      </td>
		       <td>
		      	<center><?php getinjections($mois,$annee,'Rse') ?> </center>
		      </td>
		       <td>
		     	<center><?php getorientation($mois,$annee,'Rse') ?> </center>
		      </td>
		      <td>
		      <center>00</center>
		      </td>
		      <td>
		    
		      </td>
		  </tr>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><strong>TOTAL</strong></td>
		      <td class="description">
		   		<center><?php total_consultant($mois,$annee,'Rse') ?></center> 
		      </td>
		      <td>
		      	 	<center><?php total_consultation($mois,$annee) ?></center>
		      </td>
			  <td>
			  	<center><?php total_trie($mois,$annee) ?></center>
			  </td>
		      <td>
		      		<center><?php total_glycemie($mois,$annee) ?></center>
		      </td>
		       <td>
		      	<center><?php total_tdr($mois,$annee) ?></center>
		      </td>
		       <td>
		      	<center><?php total_pansement($mois,$annee) ?></center>
		      </td>
		       <td>
		      	<center><?php total_pansement($mois,$annee) ?></center>
		      </td>
		       <td>
		      <center><?php total_orientation($mois,$annee) ?></center>
		      </td>
		      <td>
		       <center><?php total_accidents($mois,$annee) ?></center>	
		      </td>
		       <td>
		      </td>
		  </tr>
		 
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="blank"></td>
		 		
		     
		      <td colspan="" class="blank"> </td>
		      <td colspan="2" class="blank"></td>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="blank"></td>
		     
		      
		  </tr>
		
		</table>
	</div>
	<div style=" position: relative; bottom: 100px;">
	<div class="orientation">
		<div id="terms">
				<div style="clear:both"></div>
		
		<div id="customer">
            <table id="meta">
            	 <tr>
                    <th class="meta-head">Orientation</th>
                    <th>Nbre</th>
                </tr>
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td>000123</td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td>December 15, 2009</td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td>$875.00</div></td>
                </tr>

            </table>
		
		</div> 
	</div>
	</div>
		<div class="tdr">
			<h4><u>TDR</u></h4>
		<div id="terms">
				<div style="clear:both"></div>
		
		<div id="customer">
            <table id="meta">
            	 <tr>
                    <th class="meta-head">Total tdr</th>
                    <th><center><?php total_tdr($mois,$annee) ?></center></th>
                </tr>
                <tr>
                    <td class="meta-head">Test positif </td>
                    <td><center><?php total_tdr_pos($mois,$annee) ?></center></td>
                </tr>
                <tr>

                    <td class="meta-head">Test invalidées </td>
                  <td><center><?php total_tdr_inv($mois,$annee) ?></center></td>
                </tr>
                <tr>
                    <td class="meta-head">test négatifs</td>
                     <td><center><?php total_tdr_neg($mois,$annee) ?></center></td>
                </tr>

            </table>
		
		</div> 
	</div>
	</div>

	<div class="tdr" style="position:relative;
					top: 0px;left:40px;">
					<h4><u>Accidents</u></h4>
		<div id="terms">
				<div style="clear:both;"></div>
		
		<div id="customer">
            <table id="meta">
            	 <tr>
                    <th class="meta-head">Total tdr</th>
                    <th>000</th>
                </tr>
                <tr>
                    <td class="meta-head">Test positif </td>
                    <td>000</td>
                </tr>
                <tr>

                    <td class="meta-head">Test invalidées </td>
                    <td>2009</td>
                </tr>
                <tr>
                    <td class="meta-head">test négatifs</td>
                    <td><div class="due">00</div></td>
                </tr>

            </table>
            <div class="wrap">
			<center>
				<a href="tab_bord_imprime.php" class="button2"> Imprimer</a>
				</div>
			</center>
        </div>
		</div> 
	</div>
	</div>
</div>
	
</body>

</html>