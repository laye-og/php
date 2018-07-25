<?php require_once 'pages/function.php'; ?>
<div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link href="css/style_form.css" rel='stylesheet' type='text/css'/>
     <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/typeahead.bundle.js"></script>
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
<?php //require_once ('header_topp.php'); ?>
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style_form.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
  
  <script language="JavaScript" src="completion.js"></script>

<script language="JavaScript">
<!--
  // nombre de caractere minimum à tapé avant de lancer la recherche Ajax
  var minimum_caractere = 1;
  // on se moque la hauteur de case
  var case_sensitive    = 0 ;
//-->
</script>
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

<?php require_once("body/header_left.php");
require_once ('pages/header_topp.php'); ?>
<br><br><br>

<!-- debut du code HTML -->
<!-- déclaration du formulaire -->
 <div class="bg-agile" style="position: relative; top:200px; left:100px;">
<div class="book-appointment">
  <h2>Medical Information</h2>
<div class="left-agileits-w3layouts same">
<form name="completion_form" method="POST" action="pages/decaisse2.php">

<!-- obliger de laissé un autre champs text invisible pour pallier a la gestion de la touche entrée sur les formulaires -->

    <div class="gaps">
            <p>Date</p>    
            <input  id="datepicker1" name="daate" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
          </div>  
          <div class="gaps">
            <p>Plainte</p>
            <input type="text" name="plainte" placeholder="" required=""/>
          </div>      
          <div class="gaps">  
            <p>Symptômes</p>
            <input type="text" name="symptome" placeholder="" required=""/>
          </div>    
          <div class="gaps">  
            <p>Accident</p>
            <select class="form-control" name="accident">
             <option></option>
             <option>oui</option>
             <option>non</option>
            </select>
          </div>
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
            <p>Traitement</p>
            <input type="text" id="test" name="traitement" placeholder="" required=""/>
          </div>
        </div>

        <div class="right-agileinfo same">
         
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
            <p></p>
            <input type="hidden" name="datereel" placeholder="" required="" value=<?php echo date("Y-m-d");?>  />
          </div>
          <div class="gaps">  
            <p></p>
            <input type="hidden" name="type" placeholder="" required="" value=<?php echo "agent";?>  />
          </div>
<div class="gaps"> 
<INPUT TYPE="text" value="" style="display:none;">
        <p>Matricule</p>
       <input  type="text"
              class="texte"
              id="completion_text"
              name="completion_text"
              onkeyup="recup_email(event);"
              autocomplete="off">
        <div class="gaps">
  <select NAME="matricule" id="completion_select"
          name="completion_select"
          size="1"
         onclick="recup_mail_click();"
         style="margin-left:110px;border:solid 1px black;border-top:none;display:none;"></select>
    </div>
</div>
 </div>
        <div class="clear"></div>
        <input type="submit" value="Submit">
    </div>
   </div>
</form>

       

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

  

 


  

 