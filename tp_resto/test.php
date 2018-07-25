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

</div>
<div class="bestdisheswrapper" id="bestdisheswrapper">
    <div id="bestdishes" class="container">
       
     <h2 class="wow fadeInUp" data-wow-delay="0.3s">Menu du jour </h2>
      <div class="slider">
        <h2 class="wow fadeInUp" data-wow-delay="0.3s">plat de resistance </h2>
              <ul class="slides">
               <li class="slide">
                    <div class="item" >

                          <img src="images/thumb1.png" width="200" height="225" alt="sliderimg" id="img" class="wow flipInX"
                           data-wow-delay=".8s" onclick="ajouter_panier('PastaCapellini') " > 
                           <h3>Pasta Capellini <input type="checkbox" name="plat1"></h3>
                      </div> <!-- end of item-->

                     <div class="item2">
                          <img src="images/thumb2.jpg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier('Pasta Pillus')"> 
                          <h3>Pasta Pillus <input type="checkbox" name="Plat2"></h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/thumb3.png" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s"> 
                          <h3>Pasta Fusilli <input type="checkbox" name="Plat3"></h3>
                        </div>
                          
                        <div class="item">

                          <img src="images/téléchargement.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier('Pasta Fusilli')"> 
                          
                          <h3>Thiebou dieune  <input type="checkbox" name=""plat4></h3>
                      </div> <!-- end of item-->

                     <div class="item2">
                          <img src="images/tiebouyapp.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                          <h3>Thiebou yapp <input type="checkbox" name="plat5"></h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/maxalou.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s"> 
                          <h3>Mbaxalou saloum+ guerte noflaye <input type="checkbox" name="plat6"></h3>
                        </div>
                         <div class="item">

                          <img src="images/thumb1.png" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                          
                          <h3>Pasta Capellini <input type="checkbox" name="plat7"></h3>
                      </div> <!-- end of item-->

                     <div class="item2">
                          <img src="images/thumb2.jpg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                          <h3>Pasta Pillus <input type="checkbox" name="plat8"></h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/thumb3.png" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s"> 
                          <h3>Pasta Fusilli <input type="checkbox" name="plat9"></h3>
                        </div>
                          
                        <div class="item">

                          <img src="images/téléchargement.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                        
                          <h3>Thiebou dieune  <input type="checkbox" name="plat10"></h3>
                      </div> <!-- end of item-->

                     <div class="item2">
                          <img src="images/tiebouyapp.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                          <h3>Thiebou yapp <input type="checkbox" name="plat11"></h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/maxalou.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s"> 
                          <h3>Mbaxalou saloum+ guerte noflaye <input type="checkbox" name="plat12"></h3>
                        </div>
 </div

      <div class="slider">
        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Dessert </h2>
              <ul class="slides">
               <li class="slide">
              
                    <div class="item">

                          <img src="images/dessert6.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                          
                          <h3>Crème Flan <input type="checkbox" name="plat13"></h3>
                      </div> <!-- end of item-->

                     <div class="item2">
                          <img src="images/dessert5.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                          <h3>guateau a la fraise <input type="checkbox" name="plat14"></h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/dessert4.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s"> 
                          <h3>mousse au chocolat <input type="checkbox" name="plat15"></h3>
                        </div>
                          
                        <div class="item">

                          <img src="images/dessert3.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                        
                          <h3>Rambaud Crumble Fruits Rouges <input type="checkbox" name="plat16"></h3>
                      </div> <!-- end of item-->

                     <div class="item2">
                          <img src="images/desserr.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s" onclick="ajouter_panier()"> 
                          <h3>Thiebou yapp <input type="checkbox" name="plat17"></h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/dessert1.jpeg" width="200" height="225" alt="sliderimg" class="wow flipInX" id="img" 
                           data-wow-delay=".8s"> 
                          <h3>Mbaxalou saloum+ guerte noflaye <input type="checkbox" name="plat18"></h3>
                        </div>
                        <div class="valid_com" id="valid_com" >
  
  <input type="submit" name="" value="valider ma commande ">

                       
</form>
              
                  
      </div> <!-- end of slider-->
    </div> <!-- end of besth dishes-->
    </li>
  </ul>
</div>



</body>

</html>