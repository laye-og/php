<script type="text/javascript">
    function test() {
        // body...
    
  var e = document.getElementById("choix_prealable");
  var contain= document.getElementById("mini_container");
var strUser = e.options[e.selectedIndex].value;
   if (strUser=="3") 
   {
    document.getElementById("input").style.display = "block";
     contain.style.height ="300px";
      //e.style.margin-top ="20px";
   }
   else
   {
       document.getElementById("space").style.height ="100px";
   document.getElementById("input").style.display = "none";
   contain.style.height ="130px";
   //e.style.margin-top ="40px"; 
   }
   }
</script>
<style type="text/css">
    .input
    {
        height: 30px;
        margin-left: 10%;
        margin-top: 40px;

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
   <?php 
    
    $type_compte="Compte";
  
  
 ?> <!-- Container fluid  -->

     <div class="row bg-white m-l-0 m-r-0 box-shadow " id="mini_container" style="height :250px;">
                                                
           <form role="form">
           <select class="select"  id="choix_prealable" onchange="test()">
            <option value="1">Statut de l'opération </option>
              <option value="2">Genérale</option>
              <option value="3">particulier</option>
                      </select>   
                      <select class="select"  id="input" onchange="test()">
                      <option value="1">Compte sur le quel enregistré l'opération </option>
                       <?php 
     try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
    $requete=$bdd->query('SELECT * FROM les_comptes');
    while ($donnes=$requete->fetch()) {
            echo "
                            <option>".$donnes['Nom']."</option>
              
                                                ";
      

    }
  } catch (Exception $e) {
    die('erreur'.$e ->getMessage());
  }

 ?>   
                                                </select>
                                            </form>

                                            <div style="width: 1500px;"></div>
            <input type="text" placeholder="Nom de l'opération" name="" class="input">
            <input type="date" placeholder="Date" name="" class="input">
            <input type="text" placeholder="Montant" class="input">
            <input type="text" placeholder="Référence" name="" class="input">
            <div class="space" id="space" style="height: 20px;"></div>
     </div>
<div class="space" id="space" style="height: 20px;"></div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-3">
                <div class="card p-30" >
                    <div class="media">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">

                                <center>
                         <p class="m-b-0">Supprimer <?php echo $type_compte; ?></p><hr>
                        <? echo"<a href=gestion_compte.supp.php?type_compte=$type_compte>"?>  <img src="images/delete.png">

                         </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30" >
                    <div class="media">
                        <div class="media-left meida media-middle"></div>
                        <div class="media-body media-text-right">
                          <center>
                        <p class="m-b-0"> <?php echo $type_compte; ?></p><hr>
                  <? echo"<a href=gestion_compte.type.php?type_compte=$type_compte>"?><img src="images/addcouleur.png"></a>
                        </center>
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle"> </div>
                        <div class="media-body media-text-right">
                            <center>
                            <p class="m-b-0">Modifier compte <hr>
                             <? echo"<a href=gestion_compte.supp.php?type_compte=$type_compte>"?>    <img src="images/modif.png">
                                 </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle"> </div>
                        <div class="media-body media-text-right">
                            <center>
                            <p class="m-b-0">Lister comptes <hr>
                             <? echo"<a href=gestion_compte.supp.php?type_compte=$type_compte>"?>    <img src="images/listing.png">
                                 </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left:38%;">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">
                           <center>
                            <p class="m-b-0">Faire inventaire<hr>
                             <? echo"<a href=gestion_compte.supp.php?type_compte=$type_compte>"?>    <img src="images/invent.png">
                                 </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
              