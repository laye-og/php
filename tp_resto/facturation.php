<!DOCTYPE html> 
<html >
<head>
	<title>Restaurant MR toure </title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="js/jquery.js"></script> 
	<script src="js/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="untitled.css">

      <link rel="stylesheet" href="css/animate.css">
      <style type="text/css">
      .headerwrapper{  position: relative; }
        
      .facture {  position: fixed;float: left; left: 70%; top: 220px; margin: 0 0 0 110px; }
      </style>
    <script language="javascript">
      var compteur=0;

 /*function ajouter_panier(pnom) {
  compteur=compteur+1;
   document.getElementById('compteur').value=compteur;
   document.getElementById('liste_plat').innerHTML="<li class='liste'"+compteur+">"+pnom+"</li>";
  document.getElementById('facture').style.width=300+"px";
  document.getElementById('facture').style.height=500+"px";
  document.getElementById('img').style.width=300+"px";
 }
 <div class="facture" id="facture" >
  <ul id="liste_plat"></ul>
  <input type="submit" name="" value="0" id="compteur">
</div>
</script>

<style type="text/css">
  /*div{
      border:dotted;
  }*/
  
 
  .taill_logo{
    width: 400px;
  }
  .container{
    height: 100%;
  }
  
  .bestdisheswrapper{
    height: 100%;
  }
  .valid_com {  position: fixed;float: left; left: 80%; top: 200px; margin: 0 0 0 110px;width: 30px;height: 30px; }
  .valid_com input[type="submit"]
  {

  border: none;
  border-bottom: 2px solid grey;
  height: 40px;
  background: red;

  }

</style>


</head>
<body>

<form action="facturation.php" method="POST">
  

<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="#"><img class="taill_logo" src="images/coollogo_com-28826252.png" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="#navigations">HOME</a></li>
                <li> <a href="#slider">ABOUT</a></li>
                <li><a href="#map">LOCATONS</a></li>
                <li><a href="#bestdishes">MENU</a></li>
                <li><a href="#contactus">CONTACT</a></li>
            </ul>
        </nav>
      </div> 
</div> 
<center>
	<h1>FACTURE</h1><br>
<?php 
			$plat=0;
			
				if (isset($_POST['plat1'])) {
					# code...
				
					echo "pasta capelli--------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				}
				if (isset($_POST['plat2'])) {
					# code...
				
					echo "PASTA FUSILLI--------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				}
				if (isset($_POST['plat3'])) {
					# code...
				
					echo "PASTA FUSILLI--------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				}
				 if (isset($_POST['plat4'])) {
					# code...
				
					echo "PASTA PILLUS --------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				}
				 if (isset($_POST['plat5'])) {
					# code...
				
					echo "THIEBOU DIEUNE  --------------5000";
					$plat=$plat+7000;
					echo " </br>";

					
				} if (isset($_POST['plat6'])) {
					# code...
				
					echo "MBAXALOU SALOUM+ GUERTE NOFLAYE --------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				} 
				if (isset($_POST['plat7'])) {
					# code...
				
					echo "pasta capelli--------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				}
				if (isset($_POST['plat8'])) {
					# code...
				
					echo "PASTA FUSILLI--------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				}
				if (isset($_POST['plat9'])) {
					# code...
				
					echo "PASTA FUSILLI--------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				}
				 if (isset($_POST['plat10'])) {
					# code...
				
					echo "PASTA PILLUS --------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				}
				 if (isset($_POST['plat11'])) {
					# code...
				
					echo "THIEBOU DIEUNE  --------------5000";
					$plat=$plat+5000;
					echo " </br>";

					
				} if (isset($_POST['plat12'])) {
					# code...
				
					echo "MBAXALOU SALOUM+ GUERTE NOFLAYE --------------7000";
					$plat=$plat+7000;
					echo " </br>";

				} if (isset($_POST['plat13'])) {
					# code...
				
					echo "CRÈME FLAN--------------3000";
					$plat=$plat+3000;
					echo " </br>";

					
				} if (isset($_POST['plat15'])) {
					# code...
				
					echo "PASTA PILLUS --------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				} if (isset($_POST['plat16'])) {
					# code...
				
					echo "MOUSSE AU CHOCOLAT --------------4000";
					$plat=$plat+4000;
					echo " </br>";

					
				} if (isset($_POST['plat17'])) {
					# code...
				
					echo "PASTA PILLUS --------------7000";
					$plat=$plat+7000;
					echo " </br>";

					
				} if (isset($_POST['plat18'])) {
					# code...
				
					echo "GUATEAU A LA FRAISE --------------3000";
					$plat=$plat+3000;
					echo " </br>";

					
				} 
				?>
</center>
</form>
</body>
</html>

