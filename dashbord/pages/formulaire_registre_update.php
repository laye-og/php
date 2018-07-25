    <?php 
    require_once 'pages/function.php'; 
     require_once 'pages/function.php'; 
      require_once("config.php");
     function validation($val)
    {
      if(isset($val)&& !empty($val))
      {
        return true;

      }
      return false;
     
    }         

                       
            if(isset($_GET['id']))
    {
      if(validation($_GET['id']))
      { 
        $bdd=new PDO('mysql:host=localhost;dbname=dashbord','root','root');
        $requete=$bdd->query('SELECT * FROM registre where id="'.$_GET['id'].'"');
        while ($donnes=$requete->fetch()) {
          $nom=               $donnes['nom'];
          $prenom=            $donnes['prenom'];
          $matricule=         $donnes['matricule'];
          $age=               $donnes['age'];
          $traitement=        $donnes['traitement'];
          $adresse=           $donnes['adresse'];
          $plainte=           $donnes['plainte'];
          $symptome=          $donnes['symptome'];
          $date=              $donnes['daate'];
          $exploration=       $donnes['exploration'];
          $accident=          $donnes['accidents'];
          $trie=              $donnes['trie'];

        }
      }
    }
    ?>
<div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link href="css/style_form.css" rel='stylesheet' type='text/css'/>
     
<style type="text/css">
  body
  
.header_top
  {
      position: absolute;
  width: 2200px;
  height: 130px;
  top:-12;
  z-index: 20;
  padding-top: 0px;
  background: #fff;
  -webkit-box-shadow:inset 0 0 10px #000000;
  -moz-box-shadow:inset 0 0 10px #000000;
  
  box-shadow:  0 0 10px #000000;
   position: fixed;
  }
  
</style>
<?php require_once ('header_topp.php'); ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>formulaire</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Emergency Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style_form.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->

    <div class="bg-agile" style="position: relative; top:200px; left:100px;">
  <div class="book-appointment">
  <h2>Medical Information</h2>
      <form action="pages/decaisse.php" method="post">
        <div class="left-agileits-w3layouts same">
          <div class="gaps">
            <p>NOM</p>
            <input type="text" name="nom" value=<?php echo $nom;?> placeholder="" required=""/>
          </div>  
          <div class="gaps">
            <p>Prénom</p>
              <input type="text" name="prenom" value=<?php echo $prenom;?> placeholder="" required=""/>
          </div>
          <div class="gaps">
            <p>sexe</p> 
              <select class="form-control" name="sexe">
                <option></option>
                <option>M</option>
                <option>F</option>
              </select>
          </div>
         <div class="gaps">
            <p>Date</p>
            <input type="date" name="daate" placeholder="" value=<?php echo $date;?>  required=""/>
          </div>
          <div class="gaps">
            <p>Date de naissance</p>
            <input type="date" name="age" placeholder="" value=<?php echo $age;?>  required=""/>
          </div>  
          <div class="gaps">
            <p>Plainte</p>
            <input type="text" name="plainte" placeholder="" value=<?php echo $plainte;?>  required=""/>
          </div>      
          <div class="gaps">  
            <p>Symptômes</p>
            <input type="text" name="symptome" placeholder="" value=<?php echo $symptome;?>  required=""/>
          </div>
          <div class="gaps">
            <p>Matricule</p>
            <input type="text" name="matricule" value=<?php echo $matricule;?>   placeholder="" required=""/>
          </div>    
          <div class="gaps">  
            <p>Statut</p>
            <select class="form-control" name="statut">
             <option></option>
          <option>Famille</option>
           <option>Agent</option>
            <option>Rse</option>
            </select>
          </div>
        </div>
        <div class="right-agileinfo same">
          <div class="gaps">
            <p>Autres explorations</p>
            <select class="form-control" name="exploration">
              <?php lister_compte("exploration");?>
            </select>
          </div>
          <div class="gaps">
            <p>Trie</p>
           <select class="form-control" name="trie">
             <option></option>
             <option>oui</option>
             <option>non</option>
            </select>
          </div>
          <div class="gaps">
            <p>Addresse</p>
            <textarea id="message" name="adresse" placeholder="" title="Please enter Your Comments"> <?php echo $adresse;?></textarea>
            </div>
          <div class="gaps">
            <p>Traitement</p>
            <input type="text" name="traitement"  value=<?php echo $traitement;?> placeholder="" required=""/>
          </div>
          <div class="gaps">
            <p></p>
            <input type="hidden" name="daateel" placeholder="" required="" value=<?php echo date("Y-m-d");?>/>
          </div>
          <div class="gaps">
            <p>Diagnostic</p>  
            <select class="form-control" name="diagnostic">
              <?php lister_compte("diagnostic");?>
            </select>
          </div>
          <div class="gaps">
            <p>Orientation</p>  
            <select class="form-control" name="orientation">
              <?php lister_compte("orientation");?>
            </select>
          </div>
          <div class="gaps">
            <p>Soins infirmier</p>  
            <select class="form-control" name="soins">
              <?php lister_compte("soins");?>
          </div>
           </div>
          <div class="gaps">  
            <p>Accident</p>
            <input type="hidden" name="accident" placeholder="" required="" value="non" />
          </div>
             <div class="gaps">  
            <p></p>
            <input type="hidden" name="datereel" placeholder="" required="" value=<?php echo date("Y-m-d");?>  />
            <input type="hidden" name="type" placeholder="" required="" value=<?php echo "autre";?>  />
          </div>
        </div>
        <div class="clear"></div>
        <input type="submit" value="Submit">
      </form>
    </div>
   </div>
   <!--copyright-->
     
    <!--//copyright-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Calendar -->
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script src="js/jquery-ui.js"></script>
          <script>
              $(function() {
              $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
              });
          </script>
      <!-- //Calendar -->

</body>
</html>
       </form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    