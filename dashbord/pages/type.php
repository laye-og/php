<?php 
    //require_once("body/config.php");
    //define('host', 'localhost');
           if (isset($_GET['type_compte'])) {
            $type_compte=$_GET['type_compte'];
           }
           else {die("acces non autorisé");}
            try {
                $bdd=new PDO('mysql:host=localhost;dbname=bd_caisse','root','root');
                
            } catch (Exception $e) {
                die('erreur'.$e ->getMessage());
            }
          
         ?> <!-- Bread crumb -->
          
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
           <div class="row" style="position:relative; left:10%;">
            <div style="width: 300px;"></div>
                            <div class="col-lg-6">
                                <div class="card card-outline-primary">
                                    <div class="card-header" style="background: green;">
                                       <center> <h4 class="m-b-0 text-white">Creer <?php echo $type_compte; ?> </h4></center>
                                    </div>
                                    <div class="card-body"> 




                                <form action="pages/insert.php" method="post">
                                    <div class="form-body">
                                      
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-left: 100px;">
                                    <input type="text" name="nomtype" id="lastName" class="form-control form-control-danger" placeholder=""> <input type="hidden" name="type" value=<?php echo $type_compte;?>>
                                                      </div>
                                            </div>
                                            <!--/span-->
                                           
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                     
                                    </div>
                                    <div class="form-actions" style="margin-left: 100px;">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Valider</button>
                                        <button type="button" class="btn btn-inverse">Arreter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

