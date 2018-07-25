<?

function getListeComptes($opt="#"){
    ?>
    <ul aria-expanded="false" class="collapse">
        <li><a href="gestion_compte.php?type_compte=Admin">Admin </a></li>
        <li><a href="gestion_compte.php?type_compte=Professeur">Professeurs </a></li>
        <li><a href="gestion_compte.php?type_compte=Caisse">Caisse</a></li>
        <li><a href="gestion_compte.php?type_compte=Surveillants">Surveillants</a></li>
    </ul>
    <?php
}
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
                <li class="nav-label">Gestion des classes  </li>
                <li class="nav-label">Gestion des profféseurs </li>
                
                <li class="nav-label">Gestion des comptes  </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">comptes</span></a>
                    <?php getListeComptes(); ?>
                </li>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
