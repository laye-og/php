<?php 
   if (isset($_GET['type_compte'])) {
    $type_compte=$_GET['type_compte'];
   }
   else {die("acces non autorisé");}
  
 ?> <!-- Bread crumb -->
  <script type="text/javascript">
    function test() {
        // body...
    
  var e = document.getElementById("choix_prealable");

var strUser = e.options[e.selectedIndex].value;
   if (strUser=="2") 
   {
   document.getElementById("input").style.display = "none";
   document.getElementById("select").style.display = "none";
   document.getElementById("lastName").style.width = "500px";
   document.getElementById("date").style.display = "none";
   }
   else
   {
     document.getElementById("input").style.display = "block";
      document.getElementById("select").style.display = "block";
   document.getElementById("lastName").style.width = "317px";
   document.getElementById("date").style.display = "blo ck";
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
          margin-left: 100px;
          height: 30px;
          width: 400px;
          margin-top: 20px;
    }
</style>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Bonjour  </h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><?php echo $type_compte; ?></li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
   <div class="row">
    <div style="width: 300px;"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-primary">
                            <div class="card-header" style="background: green;">
                               <center> <h4 class="m-b-0 text-white">Creer un compte <?php echo $type_compte; ?> </h4></center>
                            </div>
                            <div class="card-body"> 
                                <form action="pages/creation.php" method="post">
                                    <div class="form-body">
                                      <center>  <h3 class="card-title m-t-15"> Info de la personne</h3></center>
                                        <hr>
                                         
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                    <input type="text" id="nom" name="Nom" class="form-control form-control-danger" placeholder="Nom">               
                                                      </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                      <div class=row>
                            <div class=col-md-6>
                                  <div class=form-group has-success>
                                   <select class=form-control custom-select name="type_compte" id=select>
                                    <option value="">type de compte</option>
              
  <?php 
     try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
    $requete=$bdd->query('SELECT * FROM comptes');
    while ($donnes=$requete->fetch()) {
            echo "
                            <option>".$donnes['Nom']."</option>
              
                                                ";
      

    }
  } catch (Exception $e) {
    die('erreur'.$e ->getMessage());
  }

 ?>   
                                                  </div>
                                            </div>
                                            <!--/span-->
                                            
                                            <!--/span-->
                                        </div>

                                      </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="Adresse" class="form-control" placeholder="Adresse" style="width: 320px;">
                                                </div>
                                            </div>
                                            <!--/span-->
                                          
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="numb" class="form-control" placeholder="Numéro de téléphone" style="width: 320px;">
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="form-actions" style="margin-left: 250px;">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Valider</button>
                                        <button type="button" class="btn btn-inverse">Arreter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
