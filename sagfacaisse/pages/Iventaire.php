<?php 
    if (isset($_GET['type_demande'])) {
    $type_demande=$_GET['type_demande'];
   }
   else {die("acces non autorisé");}
  
 ?>
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
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Bonjour  </h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </div>
    </div>
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
      <h4> Relevé des <?php echo $type_demande; ?></h4><br>
        <?php
 
$datetime = date("d-m-Y");
echo $datetime;
?>
      <div class="input-group input-group-icon">

        <label>Période du</label>
        <input type="date" name="date_debut" placeholder="Période du"/>
        <div class="input-icon"></div>
      </div>
       <label>Au</label>
       <div class="input-group input-group-icon">
        <input type="date" name="date_fin" placeholder="AU"/>
        <input type="hidden" name="type_demande" value=<?php echo $type_demande; ?>>
        <div class="input-icon"></div>
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