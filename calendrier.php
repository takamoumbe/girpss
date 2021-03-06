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
        <title>Pages de notes</title>

        <!--calendar css-->
        <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
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
                                        <span class="badge up badge-success badge-pill">4</span>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                        <li>
                                            <h5>Notifications</h5>
                                        </li>
                                        <li>
                                            <a href="admin-widgets.html" class="user-list-item">
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
                                                      <span class="name">Scolarit??s</span>
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
                                            <h5>salut, Clariss</h5>
                                        </li>
                                        <li><a href="profil.html" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="index.html" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Deconnexion</a></li>
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
                              <a href="admin-widgets.html" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Acceuil </span> </a>
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
                              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> El??ves </span> <span class="menu-arrow"></span></a>
                              <ul class="list-unstyled">
                                  <li><a href="ajouter_eleve.php">Ajouter</a></li>
                                  <li><a href="liste_eleve.php">Lister</a></li>
                                  <li><a href="scolarite.php">Scolarit??s</a></li>
                                  <li><a href="requete.php">Requ??tes</a></li>
                              </ul>
                          </li>
                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                            </li>
                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-heart-outline"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-colored.html">Colored Icons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li> -->

                            <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond-stone"></i><span class="badge badge-info float-right">New</span> <span> Forms </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
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
                        <h5 class="text-muted m-t-0">Contacter Nous</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/><a href="takamopenclass@gmail.com" class="addres">takamopenclass@gmail.com</a></p>
                        <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+237) 690 857 430</p>
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
                                             <h4 class="page-title">Calendar </h4>
                                             <div class="clearfix"></div>
                                           </div>
							                     </div>
						              </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-danger btn-block waves-effect m-t-20 waves-light">
                                                        <i class="fa fa-plus"></i> Create New
                                                    </a>
                                                    <div id="external-events" class="m-t-20">
                                                        <br>
                                                        <p class="text-muted">Create your different tasks</p>
                                                        <div class="external-event bg-success" data-class="bg-success">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i> lundi 02/01 Conference 12h
                                                        </div>
                                                        <div class="external-event bg-info" data-class="bg-info">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>03/02 Acceuil du personnel
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-xl-9">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title mt-0">Ajouter un ??v??nement</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-20"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fermer</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Cr??e un ??v??nement</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Supprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title mt-0">Ajouter une cat??gorie</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-20">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Nom de la cat??gorie</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Couleur de la categorie</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Vert</option>
                                                                <option value="danger">Rouge</option>
                                                                <option value="info">Bleu</option>
                                                                <option value="pink">Rose</option>
                                                                <option value="primary">Bleu claire</option>
                                                                <option value="warning">Warning</option>
                                                                <option value="orange">Orange</option>
                                                                <option value="brown">Brown</option>
                                                                <option value="teal">Teal</option>
                                                                <option value="inverse">Inverse</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fermer</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Savegarder</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2022 - 2023 ?? Girpss <span class="d-none d-sm-inline-block">tout droit r??server.</span>
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
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-12">
                             <h5 class="m-0"><a href="#">Informations</a></h5>
                            <p class="text-muted m-b-0"><small>do yo want to change your information?</small></p>
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
