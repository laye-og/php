	<style>
  
 
  .header_left
  {
    float: left;
    position: absolute;
  width: 240px;
  height: 100%;
  top:0px;
  z-index: 20;
  padding-top: 60px;
  background: #fff;
  -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
  box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
  position: fixed;
  }
	
</style>
<link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <div class="header_left">
		<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Navigateur</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                    </i> <h3 class="menu-title">Registre</h3><!-- /.menu-title --></a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="registre.php"> <i class="menu-icon fa fa-eye"></i>Apercu </a>
                    </li>
                    <li>
                        <a href="formulaire_acceuil.php"> <i class="menu-icon fa fa-table"></i>Registre</a>
                    </li>
                    

                    <h3 class="menu-title">Création</h3><!-- /.menu-title -->

                    <li>
                        <a href="gestion_compte.insc_compte.php?type_compte=diagnostic"> <i class="menu-icon fa fa-medkit"></i>Diagnostic</a>
                    </li>
                    <li>
                        <a href="gestion_compte.insc_compte.php?type_compte=soins"> <i class="menu-icon fa fa-stethoscope"></i>soins infirmier</a>
                    </li>
                     <li>
                        <a href="gestion_compte.insc_compte.php?type_compte=exploration"> <i class="menu-icon fa fa-search"></i>Autres explorations</a>
                    </li>
                    <li>
                        <a href="gestion_compte.insc_compte.php?type_compte=orientation"> <i class="menu-icon fa fa-question-circle"></i>Orientation</a>
                    </li> 
                    <h3 class="menu-title">Tableau de bord</h3><!-- /.menu-title -->
                     <li>
                        <a href="acceuil_tab_bord.php"> <i class="menu-icon fa fa-table"></i>tdb mensuel </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
</div>