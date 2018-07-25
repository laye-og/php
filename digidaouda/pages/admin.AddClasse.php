<?php  ?>
 <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <!-- Start Gestion effective d'une classe-->
                 <div class="row">
                                
                <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Ajouter une  nouvelle classe</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Les informations liées a la nouvelle classe</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Le niveau de la classe</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Terminale</option>
                                                        <option value="">Premiére</option>
                                                        <option value="">Seconde</option>
                                                        <option value="">Troisiéme</option>
                                                        <option value="">Quatriéme</option>
                                                        <option value="">Cinquiéme</option>
                                                        <option value="">Sixiéme</option>
                                                    </select>
                                                    <small class="form-control-feedback">Entrer le niveau de la classe </small> </div>
                                            </div>
                                            <!--/span-->
                                           <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">La série de la classe</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Scientifique</option>
                                                        <option value="">Littéraire</option>
                                                    </select>
                                                    <small class="form-control-feedback">Ce champ n'est pas obligatoire si la classe appartient au collége</small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Le nombre maximum d'eleves</label>
                                                    <input type="text" class="form-control" placeholder="nombre max d'eleves">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        </div>                        
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Enregister</button>
                                        <button type="button" class="btn btn-inverse">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <!-- End ajout  d'une classe -->
                
                </div>

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <!-- column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">

                                <a href="pages/AddClasse.php"><button type="button" class="btn btn-primary btn-flat btn-addon m-b-15 m-l-10"><i class="ti-plus"></i>Ajouter une nouvelle classe</button></a>
                                   <a href="pages/DropClasse.php"><button type="button" class="btn btn-danger btn-flat btn-addon m-b-15 m-l-10"><i class="ti-close"></i>Supprimer une classe</button></a>
                                   <a href="pages/ModifyClasse.php"><button type="button" class="btn btn-success btn-flat btn-addon m-b-15 m-l-10"><i class="ti-settings"></i>Modifier attribut d'une classe</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
               
                        <!-- /# column -->
                        


                  
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->