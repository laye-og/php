<?php if(!defined('PATH_BODY'))die("ACCES NON AUTORISÉ");


?>  

 <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <div class="">
                      <select class="btn btn-info" style="width:100%" class="" name="">
                         <option value="">Année  2017-2018</option>
                         <option value="">Année  2018-2019</option>
                      </select>
                    </div>
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Gestion Des Classes <span class="label label-rouded label-primary pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="Liste_Classe.php">La liste des classe</a></li>
                                <li><a href="ajout_classe.php">Ajouter une classe</a></li>
                                <li><a href="Supprimer_Classe.php">Supprimer une classe</a></li>
                                <li><a href="pages/ModifyClasse.php">Modifier les attributs d'une classe</a></li>
                            </ul>
                        </li>
                         <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Gestion Des Eleves <span class="label label-rouded label-primary pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="">Ajouter un Eleve dans une classe</a></li>
                                <li><a href="">Supprimer un eleve</a></li>
                                <li><a href="">Modifier les attributs d'un eleve</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Gestion Des Emplois du temps<span class="label label-rouded label-primary pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="">Definir un nouvel emploi du temps</a></li>
                                <li><a href="">Modifier un emploi du temps</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Gestion Des inscriptions et Mensualites<span class="label label-rouded label-primary pull-right">2</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="">Inserer un nouvelle emploi du temps</a></li>
                                <li><a href="">Modifier un emploi du temps</a></li>
                                
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
