<?php require_once 'pages/function.php'; ?>
<div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/css/style.css">
      <link rel="stylesheet" type="text/css" href="css/css/styleemploi.css">

  
<div class="container" style="position:relative;top:25px;">
  <form action="pages/encaisse.php" method="post">
    <div class="row">
      <h4> faire un encaissement</h4><br>
       <?php
 
$datetime = date("d-m-Y");
echo $datetime;
?>

      <div class="input-group input-group-icon">
        <input type="text" name="piece" placeholder="Piéce"/>
        <div class="input-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="date" name="daate" placeholder="daate "/>
        <div class="input-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="Montant" placeholder="Montant"/>
        <div class="input-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
      </div>
       <div class="input-group input-group-icon">
        <input type="text" name="Observation" placeholder="Observations"/>
        <div class="input-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <select name="compte">
         <?php lister_compte();?>
        </select>

        <input type="hidden" name="datereel" value=<?php echo $datetime; ?>>
        <div class="input-icon"></div>
      </div>
    </div>
    
     
    <div class="row">
    
      <div class="input-group">
          <center><button class="input-group input-group-icon">Ajouter</button></center>
      </div>
       </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

 