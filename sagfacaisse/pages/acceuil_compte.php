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
  
  
 ?> <!-- Container fluid  
  -->
   
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div style="height: 50px;"></div>
       <div class="row" style="margin-left: 200px; width: 1500px;height: 200px;">
            <div class="col-md-3" >
                <div class="card p-30" style="background-color: #E1FFD8;color: white;" >
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
            <div class="col-md-3" style="margin-left: 100px;margin-right: 300px;">
                <div class="card p-30" style="background-color: #E1FFD8;" >
                    <div class="media">
                        <div class="media-left meida media-middle"> </div>
                        <div class="media-body media-text-right">
                            <center>
                            <p class="m-b-0">Lister comptes <hr>
                             <? echo"<a href=gestion_compte.liste.php?type_compte=$type_compte>"?>    <img src="images/listing.png">
                                 </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 0px;">
                <div class="card p-30" style="background-color: #E1FFD8";>
                    <div class="media">
                        <div class="media-left meida media-middle"></div>
                        <div class="media-body media-text-right">
                          <center>
                        <p class="m-b-0">Ajouter <?php echo $type_compte; ?></p><hr>
                  <? echo"<a href=gestion_compte.insc.php?type_compte=$type_compte>"?><img src="images/addcouleur.png"></a>
                        </center>
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 100px;">
                <div class="card p-30" style="background-color: #E1FFD8";>
                    <div class="media">
                        <div class="media-left meida media-middle"></div>
                        <div class="media-body media-text-right">
                          <center>
                        <p class="m-b-0">Ajouter un type de <?php echo $type_compte; ?></p><hr>
                  <? echo"<a href=gestion_compte.insc_compte.php?type_compte=$type_compte>"?><img src="images/addcouleur.png"></a>
                        </center>
                     </div>
                    </div>
                </div>
            </div>
             <div class="container-fluid">
        <!-- Start Page Content -->
        
           
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
              