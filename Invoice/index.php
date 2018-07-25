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
  <body onload="myFunction()">
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
		      <td class="item-name"><div class="delete-wpr"><strong>Agent</strong></td>
		      <td class="description">
		   		
		      </td>
		      <td>
		      	
		      </td>
			  <td>
			  	
			  </td>
		      <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      
		      </td>
		       <td>
		      
		      </td>
		  </tr>
		 <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><strong>Mbres de Famille</strong></td>
		      <td class="description">
		   		
		      </td>
		      <td>
		      	
		      </td>
			  <td>
			  	
			  </td>
		      <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      
		      </td>
		       <td>
		      
		      </td>
		  </tr>
		 <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><strong>RSE</strong></td>
		      <td class="description">
		   		<center>100</center>
		      </td>
		      <td>
		      	<center>100</center>
		      </td>
			  <td>
			  	<center>100</center>
			  </td>
		      <td>
		      	<center>100</center>
		      </td>
		       <td>
		      	<center>100</center>
		      </td>
		       <td>
		      	<center>100</center>
		      </td>
		       <td>
		      	<center>100</center>
		      </td>
		       <td>
		      <center>100</center>
		      </td>
		       <td>
		      <center>100</center>
		      </td>
		      <td>
		      <center>100</center>
		      </td>
		  </tr>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><strong>TOTAL</strong></td>
		      <td class="description">
		   		
		      </td>
		      <td>
		      	
		      </td>
			  <td>
			  	
			  </td>
		      <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      	
		      </td>
		       <td>
		      
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
		
		</div> 
	</div>
	</div>
</div>
	
</body>

</html>