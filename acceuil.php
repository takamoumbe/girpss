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
                                <a href="#" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Acceuil </span> </a>
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
                        <!-- end row -->
                        <form class="" action="index.html" method="post">
                          <div class="row">
                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-box-two widget-two-primary row col-md-12">
                                    <div class="col-md-7">
                                      <p class="text-uppercase font-600 font-secondary text-overflow">Mr KANGA</p>
                                        <h5 class="">Maths</h5>
                                        <input type="checkbox" class="checkbox-primary" name="" value=""><label class="q1r1"> Presence</label>
                                    </div>
                                    <div class=" col-md-5">
                                        <img src="assets/images/profil/profil1.jpg" class="card-img" alt="">
                                    </div>
                                  </div>
                              </div><!-- end col -->

                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-box-two widget-two-success row col-md-12">
                                    <div class="col-md-7">
                                      <p class="text-uppercase font-600 font-secondary text-overflow">Mr TAKAM</p>
                                        <h5 class="">Informatiques</h5>
                                        <input type="checkbox" class="" name="" value=""><label class="q1r1"> Presence</label>
                                    </div>
                                    <div class=" col-md-5">
                                        <img src="assets/images/profil/profil1.jpg" class="card-img" alt="">
                                    </div>
                                  </div>
                              </div><!-- end col -->

                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-box-two widget-two-warning row col-md-12">
                                    <div class="col-md-7">
                                      <p class="text-uppercase font-600 font-secondary text-overflow">Mr Brice</p>
                                        <h5 class="">Mecanique</h5>
                                        <input type="checkbox" class="" name="" value=""><label class="q1r1"> Presence</label>
                                    </div>
                                    <div class=" col-md-5">
                                        <img src="assets/images/profil/profil1.jpg" class="card-img" alt="">
                                    </div>
                                  </div>
                              </div><!-- end col -->

                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-box-two widget-two-info row col-md-12">
                                    <div class="col-md-7">
                                      <p class="text-uppercase font-600 font-secondary text-overflow">Mme TCHOUA</p>
                                        <h5 class="">Anglais</h5>
                                        <input type="checkbox" class="" name="" value=""><label class="q1r1"> Presence</label>
                                    </div>
                                    <div class=" col-md-5">
                                        <img src="assets/images/profil/profil1.jpg" class="card-img" alt="">
                                    </div>
                                  </div>
                              </div><!-- end col -->
                          </div>
                          <!-- end row -->

                          <div class="row">

                              <div class="col-xl-3 col-md-6">
                                  <div class="card-box widget-box-two widget-two-danger row col-md-12">
                                    <div class="col-md-7">
                                      <p class="text-uppercase font-600 font-secondary text-overflow">Mme PAMELA</p>
                                        <h5 class="">Comptabilite</h5>
                                        <input type="checkbox" class="" name="" value=""><label class="q1r1"> Presence</label>
                                    </div>
                                    <div class=" col-md-5">
                                        <img src="assets/images/profil/profil1.jpg" class="card-img" alt="">
                                    </div>
                                  </div>
                              </div><!-- end col -->

                          </div>
                          <!-- end row -->
                      </form>
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
    </body>
</html>
