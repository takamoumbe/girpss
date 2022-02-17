<?php require_once "traitement/connexion_bdd.php";
      $conn = connexion();
      session_start();

      ?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Acceuil</title>
        <!-- Bootstrap Sweet Alert -->
        <link href="../plugins/sweet-alert2/sweetalert2.css" rel="stylesheet" type="text/css">
        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/ajout.css" />
            <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <!-- javascript -->
        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="#" class="logo"><span>GIR<span>PSS</span></span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <!-- Navbar-left -->
                             <ul class="nav navbar-left">
                                <li>
                                    <button class="button-menu-mobile open-left waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                                <li class="d-none d-sm-inline-block">
                                    <form role="search" class="app-search">
                                        <input type="text" placeholder="Search..."
                                               class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                            </ul>
                            <!-- Right(Notification) -->
                            <ul class="nav navbar-right">
                                <li>
                                    <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                        <i class="mdi mdi-bell"></i>
                                        <span class="badge up badge-success badge-pill">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                        <li>
                                            <h5>Notifications</h5>
                                        </li>
                                        <li>
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-info">
                                                    <i class="mdi mdi-account"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Enseignants absents</span>
                                                    <span class="time">04/02/2022</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="salaire.html" class="user-list-item">
                                                <div class="icon bg-danger">
                                                    <i class="mdi mdi-account-check"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Salaires</span>
                                                    <span class="time">04/02/2022</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="eleve.html" class="user-list-item">
                                                <div class="icon bg-warning">
                                                    <i class="mdi mdi-account-multiple"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Scolarités</span>
                                                    <span class="time">04/02/2022</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                        <i class="mdi mdi-settings"></i>
                                    </a>
                                </li>
                                <li class="dropdown user-box">
                                    <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                        <img src="assets/images/logo.png" alt="user-img" class="rounded-circle user-img">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                        <li>
                                            <h5>salut, <?php echo $_SESSION['nom']?></h5>
                                        </li>
                                        <li><a href="profil.php" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="traitement/deconnexion.php" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Deconnexion</a></li>
                                    </ul>
                                </li>
                            </ul> <!-- end navbar-right -->
                        </div>

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="acceuil.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Acceuil </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span> Professeurs </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ajouter_prof.php">Ajouter</a></li>
                                    <li><a href="liste_prof.php">Lister</a></li>
                                    <li><a href="salaire.php">Payer salaires</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Elèves </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ajouter_eleve.php">Ajouter</a></li>
                                    <li><a href="liste_eleve.php">Lister</a></li>
                                    <li><a href="scolarite.php">Scolarités</a></li>
                                    <li><a href="requete.php">Requêtes</a></li>
                                    <li><a href="photocopie.php">Photocopie</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="calendrier.php" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendrier </span></a>
                            </li>
                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-logout.html">Logout</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span> Extras </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-sitemap.html">Sitemap</a></li>
                                    <li><a href="extras-about.html">About Us</a></li>
                                    <li><a href="extras-contact.html">Contact</a></li>
                                    <li><a href="extras-members.html">Members</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-search-result.html">Search Result</a></li>
                                    <li><a href="extras-emailtemplate.html">Email Template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                </ul>
                            </li> -->
                            <li class="menu-title">Plus d'options</li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="mdi mdi-help"></i><span> Aide </span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                    <div class="help-box">
                        <h5 class="text-muted m-t-0">Contacter Nous </h5>
                        <p class=""><span class="text-custom">Email:</span> <br/><a href="takamopenclass@gmail.com" class="addres">takamopenclass@gmail.com</a></p>
                        <p class="m-b-0"><span class="text-custom">Contact:</span> <br/> (+237) 690 857 430</p>
                    </div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Professeurs </h4>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                    $modif_prof = mysqli_query($conn,"SELECT*FROM enseignant,quartier WHERE enseignant.id_quartier = quartier.id_quartier AND etat_enseignant = 0");
                                    $count_prof = mysqli_num_rows($modif_prof);
                                    if($count_prof == 1){
                                        $modif_prof_parcourt = mysqli_fetch_array($modif_prof);
                                        }
                                ?>
                                <div class="col-md-8">
                                    <form class="form-horizontal" action="traitement/enregistrer_prof.php" method="POST" enctype="multipart/form-data">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Nom</label>
                                                <input class="form-control" type="text" name="nom" required="" placeholder="Nom">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Profession</label>
                                                <input class="form-control" type="text" name="profession" required="" placeholder="profession">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Matiere</label>
                                                <input class="form-control" type="text" name="matiere" required="" placeholder="Matiere">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-12">
                                                <label>Contact</label>
                                                <input class="form-control" type="number" min="0" name="contact" required="" placeholder="Contact">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Salaire</label>
                                                <input class="form-control" type="number" min="100" name="salaire" required="" placeholder="Salaire">
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Age</label>
                                                <input class="form-control" type="number" min="10" name="age" required="" placeholder="Age">
                                            </div>
                                        </div> 
                                         <div class="form-group row">
                                            <div class="col-12">
                                                <label>Sexe</label>
                                                <select class="form-control" name="sexe"required="">
                                                    <option></option>
                                                    <option value="M">Masculin</option>
                                                    <option value="M">Feminin</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Quartier</label>
                                                <select class="form-control" name="quartier" required="">
                                                    <option value="0">Selectionner un quartier</option>
                                                    <?php 
                                                    $requete_quartier = mysqli_query($conn,"SELECT*FROM quartier");
                                                    $counter_quartier = mysqli_num_rows($requete_quartier);
                                                     for ($i=0; $i < $counter_quartier ; $i++) {
                                                        $parcour_quartier = mysqli_fetch_array($requete_quartier);
                                                        ?>
                                                         
                                                        <option value="<?php echo $parcour_quartier['id_quartier']?>"><?php echo $parcour_quartier['nom_quartier']?></option>
                                                        <?php 
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <label>Jour d'enseignement</label>
                                                        <select class="form-control" multiple size="7" name="jours[]" required="">
                                                            <option value="1">Lundi</option>
                                                            <option value="2">Mardi</option>
                                                            <option value="3">Mercredi</option>
                                                            <option value="4">jeudi</option>
                                                            <option value="5">Vendredi</option>
                                                            <option value="6">Samedi</option>
                                                            <option value="7">Dimanche</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-6">
                                                <label>Selectionner une image</label>
                                                <div class="image">
                                                    <input type="file" name="photo" id="photo" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" name="enregistrer_prof" type="submit">Enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4" >
                                   <form class="form-horizontal" action="traitement/enregistrer_quartier.php" method="POST">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Quartier absent</label>
                                                <input class="form-control" type="text" name="quartier_absent" required="" placeholder="Quartier">
                                            </div>
                                        </div> 
                                       <div class="form-group account-btn text-center m-t-5">
                                            <div class="col-12">
                                                <button class="btn w-md btn-bordered btn-info waves-effect waves-light" name="enregistrer_quartier" type="submit"><i class="ion ion-md-checkmark "></i></button>
                                            </div>
                                        </div>
                                   </form>
                                </div>
                            </div>
                    </div> <!-- end row -->
                </div> <!-- container -->
            </div> <!-- content -->

                <footer class="footer">
                    2022 - 2023 © Girpss <span class="d-none d-sm-inline-block">tout droit réserver.</span>
                </footer>
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Paramètres</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-12">
                             <h5 class="m-0"><a href="#">Informations</a></h5>
                            <p class="text-muted m-b-0"><small>Voulez-vous changer vos informations?</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->
        </div>
        <!-- END wrapper -->


                <script>
                    var resizefunc = [];
                </script>

                <!-- jQuery  -->
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/js/bootstrap.bundle.min.js"></script>
                <script src="assets/js/detect.js"></script>
                <script src="assets/js/fastclick.js"></script>
                <script src="assets/js/jquery.blockUI.js"></script>
                <script src="assets/js/waves.js"></script>
                <script src="assets/js/jquery.slimscroll.js"></script>
                <script src="assets/js/jquery.scrollTo.min.js"></script>
                <script src="../plugins/switchery/switchery.min.js"></script>

                <!-- Jquery-Ui -->
                <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

                <!-- BEGIN PAGE SCRIPTS -->
                <script src="../plugins/moment/moment.js"></script>
                <script src='../plugins/fullcalendar/js/fullcalendar.min.js'></script>
                <script src="assets/pages/jquery.fullcalendar.js"></script>

                <!-- App js -->
                <script src="assets/js/jquery.core.js"></script>
                <script src="assets/js/jquery.app.js"></script>

                <?php if (isset($_SESSION['message_enregistrer_prof'])):?>
      <?php
        echo '<script type="text/javascript">';
        echo 'alert("';
        echo $_SESSION['message_enregistrer_prof'];
        echo '")';
        echo "</script>";
        unset($_SESSION['message_enregistrer_prof']);
     ?>
    <?php  endif ?>

      <?php if (isset($_SESSION['enregistrer_quartier'])):?>
      <?php
        echo '<script type="text/javascript">';
        echo 'alert("';
        echo $_SESSION['enregistrer_quartier'];
        echo '")';
        echo "</script>";
        unset($_SESSION['enregistrer_quartier']);
     ?>
    <?php  endif ?>
    </body>
</html>
