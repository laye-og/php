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
body{
  background-color: #E1FFD8;
}
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

     
<div class="space" id="space" style="height: 20px;"></div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-3" style="margin-left: 300px;margin-right: 100px;">
                <div class="card p-30" >
                    <div class="media">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">

                                <center>
                         <p class="m-b-0">Encaissement </p><hr>
                        <? echo"<a href=acceuil_encaissemnt.php>"?>  <img src="images/invent.png">

                         </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" >
                <div class="card p-30" >
                    <div class="media">
                        <div class="media-left meida media-middle"></div>
                        <div class="media-body media-text-right">
                          <center>
                        <p class="m-b-0"> Gestion des Comptes </p><hr>
                  <? echo"<a href=gestion_compte.type.php?type_compte=$type_compte>"?><img src="images/addcouleur.png"></a>
                        </center>
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 300px;margin-right: 100px; margin-top: 30px;">
                <div class="card p-30" >
                    <div class="media">
                        <div class="media-left meida media-middle"> </div>
                        <div class="media-body media-text-right">
                            <center>
                            <p class="m-b-0">Décaissement <hr>
                             <? echo"<a href=acceuil_decaissemnt.php>"?>    <img src="images/decaissse.png">
                                 </center>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3" style="margin-top: 30px;">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">
                           <center>
                            <p class="m-b-0">Tableau détaillé et résumé de la caisse par periode <hr>
                             <? echo"<a href=inventaire.php?type_demande=inventaires>"?>    <img src="images/inventt.png">
                                 </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:300px"></div>
          
              