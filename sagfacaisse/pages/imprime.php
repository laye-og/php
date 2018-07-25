<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style_facture.css" media="all" />
  </head>

  	<style type="text/css">
  		.button
  		{
  			height: 50px; 
  			width: 200px; 
  			position:relative; 
  			left: 300px;
  			font-size: 25px;
  			background-color: green;
  			font-family: courier New header;
  		}
  	</style>
  	<script>
function myFunction() {
    window.print();
  }
  
</script>
  <body onload="myFunction()">
<div id=""></div>
 <header class="clearfix">
 <div id="logo">
        <img style="width:250px;" src="images/logo.png">
      </div>
      <h1>Facture</h1>
      <div id="project">
      	 <div>Groupe Sagfa</div>
        <div>Sicap liberté 3 <br />Dakar,Senegal</div>
        <div>774497749</div>
        <div><a href="mailto:Sagfa28@gmail.com">Sagfa28@gmail.com</a></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Piéce</th>
            <th class="desc">DESCRIPTION</th>
            <th>Montat</th>
            <th>Date</th>
            <th>Compte</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Design</td>
            <td class="desc">Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">26</td>
            <td class="total">$1,040.00</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">TOTAL</td>
            <td class="grand total">$6,500.00</td>
          </tr>
        </tbody>
      </table>
    </main>
  </body>
</html>