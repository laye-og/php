
<style type="text/css">
    .input
    {
        height: 30px;
        margin-left: 10%;
        margin-top: 0px;

    }
    .select
    {
        background:green;
         color: white;
          margin-left: 500px;
          height: 30px;
          width: 400px;
          margin-top: 20px;
    }
    .label 
    {
      margin-left: 10%; margin-right: 20px;
    }

</style>
    <!-- Bread crumb -->
    <!-- End Bread crumb -->

     <?php require_once 'pages/function.php'; ?>
<div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/css/style.css">
      <link rel="stylesheet" type="text/css" href="css/css/styleemploi.css">

  
<div class="container" style="position:relative;top:25px;">
  <form action="facture.php" method="post">
    <div class="row">
        <?php
 
$datetime = date("d-m-Y");
echo $datetime;
?>
      <div class="input-group input-group-icon">

   
       <select style="position: relative; top:20px; width: 500px">
        <option>mois</option>
         <option>janvier</option>
         <option>fevrier</option>
         <option>mars</option>
         <option>Avril</option>
         <option>Mai</option>
         <option>juin</option>
         <option>juillet</option>
         <option>Aout</option>
         <option>septembre</option>
         <option>octobre</option>
         <option>Novembre</option>
         <option>Decembre</option>

       </select>
        <div class="input-icon"></div>
      </div>
      <div style="position: relative; left:100px;">
       <div class="input-group input-group-icon">
        <input style="position: relative; top:20px; width: 500px" type="text" name="date_fin" placeholder="Anne"/>
        <input type="hidden" name="type_demande" value=>
      </div>
      <?php //affiche_tab("2018-01-01","2018-12-31","encaissement") ?>
    </div>
    
     
    <div class="row">
    
      <div class="input-group">
          <center><button class="input-group input-group-icon">Ajouter</button></center>
      </div>
       </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>