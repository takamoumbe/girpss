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
        <title>Liste des professeurs</title>
        <!--calendar css-->
        <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/ajout.css" />
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
                                            <a href="acceuil.php" class="user-list-item">
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
                                            <a href="#" class="user-list-item">
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
                                            <h5>salut,lariss</h5>
                                        </li>
                                        <li><a href="profil.html" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="index.html" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                                <li><a href="#">Lister</a></li>
                                <li><a href="salaire.php">Payer salaires</a></li>
                              </ul>
                          </li>
                          <li class="has_sub">
                              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Students </span> <span class="menu-arrow"></span></a>
                              <ul class="list-unstyled">
                                <li><a href="ajouter_eleve.php">Ajouter</a></li>
                                <li><a href="liste_eleve.php">Lister</a></li>
                                <li><a href="scolarite.php">Scolarités</a></li>
                                <li><a href="requete.php">Requêtes</a></li>
                              </ul>
                          </li>
                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendrier </span></a>
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
                                             <h4 class="page-title">Listes des professeurs </h4>
                                             <div class="clearfix"></div>
                                           </div>
							                    </div>
						             </div>
                        <!-- end row -->

                        <div class="card-box col-md-12">
                         <div class="row">
                            <?php 
                                $requete_prof = mysqli_query($conn,"SELECT*FROM enseignant,quartier WHERE enseignant.id_quartier = quartier.id_quartier AND etat_enseignant = 0");
                                $counter_prof = mysqli_num_rows($requete_prof);
                                for ($i=0; $i < $counter_prof ; $i++) {
                                    $parcour_prof = mysqli_fetch_array($requete_prof);
                            ?>
                           <div class="col-xl-6 col-md-9">
                               <div class="card-box widget-box-two widget-two-primary row col-md-12">
                                 <div class="col-md-7">
                                   <p class="text-uppercase font-600 font-secondary text-overflow"><?php echo 'NOM :'.' '.$parcour_prof['nom_enseignant']?></p>
                                   <p class="text-overflow"><?php echo 'Age :'.' '.$parcour_prof['age_enseignant'].' ans'?></p>
                                   <p class="text-overflow"><?php echo 'Profession :'.' '.$parcour_prof['profession_enseignant']?></p>
                                   <p class="text-overflow"><?php echo 'Contact :'.' +237 '.$parcour_prof['contact_enseignant']?></p>
                                   <p class="text-overflow"><?php echo 'Quartier :'.' '.$parcour_prof['nom_quartier']?></p>
                                     <h5 class=""><?php echo 'Matiere :'.' '.$parcour_prof['matiere_enseignant']?></h5>
                                     <p><?php echo 'Debut :'.' '.$parcour_prof['date_enregistrer']?></p>
                                     <h6 class="text-overflow"><?php echo 'Salaire :'.' '.$parcour_prof['salaire_enseignant'].' XAF'?></h6>
                                     <!-- selectionner les jours -->
                                     <?php 
                                        $select_jour = mysqli_query($conn,"SELECT planification.nom_jour FROM enseignant_jour,enseignant,planification WHERE  enseignant.id_enseignant = $parcour_prof['id_enseignant'] AND enseignant_jour.id_jour = planification.id_jour AND enseignant.id_enseignant = enseignant_jour.id_enseignant");
                                        if ($select_jour) {
                                           $count_jour = mysqli_num_rows($select_jour);
                                           ?>
                                               <select multiple size="<?php echo $count_jour ?>" disable>
                                           <?php
                                           for ($i=0; $i <$count_jour ; $i++) { 
                                                $parcourt_jour = mysqli_fetch_array($select_jour);
                                               ?> 
                                                   <option><?php echo $parcourt_jour['nom_jour'] ?></option>
                                               
                                               <?php
                                           }
                                           ?>
                                           </select>
                                        <?php
                                        }
                                      ?>
                                      <br>
                                     <a href="traitement/enregistrer_prof.php?delete=<?php echo $parcour_prof['id_enseignant']?>"><button class="btn w-ms btn-danger btn-bordered waves-effect waves-light" type="submit"><i class=" ion ion-md-trash"></i></button></a>
                                     <a href="liste_prof.php?edit=<?php echo $parcour_prof['id_enseignant']?>"><button class="btn w-ms btn-info btn-bordered waves-effect waves-light" type="submit"><i class="ion ion-md-create"></i></button></a>
                                 </div>
                                 <div class=" col-md-5">
                                    <?php  $img = 'traitement/'.$parcour_prof['photo_enseignant'];?>
                                     <img src="<?php echo $img; ?>" class="card-img" alt="">
                                 </div>
                               </div>
                           </div><!-- end col -->
                            <?php 
                                }
                            ?>
                        </div> <!-- end row -->

                        <?php
                            if(isset($_GET['edit'])){
                                $id_prof = $_GET['edit'];
                                $modif_prof = mysqli_query($conn,"SELECT*FROM enseignant,quartier WHERE enseignant.id_quartier = quartier.id_quartier AND etat_enseignant = 0 AND id_enseignant = $id_prof");
                                $parcourt_prof = mysqli_fetch_array($modif_prof);
                        ?> 
                            <!-- start edit -->
                            <div class="col-xl-12 col-md-12">
                                <div class="card-box widget-box-two widget-two-success">
                                      <div class="row">
                                        
                                  <div class="col-md-8">
                                    <form class="form-horizontal" action="traitement/enregistrer_prof.php" method="POST" enctype="multipart/form-data">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Nom</label>
                                                <input class="form-control" type="text" name="nom" required="" value=" <?php echo $parcourt_prof['nom_enseignant'] ?>" placeholder="Nom">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Profession</label>
                                                <input class="form-control" type="text" value=" <?php echo $parcourt_prof['profession_enseignant'] ?>" name="profession" required="" placeholder="profession">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Matiere</label>
                                                <input class="form-control" type="text" value=" <?php echo $parcourt_prof['matiere_enseignant'] ?>" name="matiere" required="" placeholder="Matiere">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-12">
                                                <label>Contact</label>
                                                <input class="form-control" type="number" min="0" value="<?php echo $parcourt_prof['contact_enseignant'] ?>" name="contact" required="" placeholder="Contact">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Date Enregistrement</label>
                                                <input class="form-control" type="date" value="<?php echo $parcourt_prof['date_enregistrer'] ?>" name="date" required="" placeholder="Date d'enseignement">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Salaire</label>
                                                <input class="form-control" value="<?php echo $parcourt_prof['salaire_enseignant'] ?>" type="number" min="100" name="salaire" required="" placeholder="Salaire">
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label>Age</label>
                                                <input class="form-control" value="<?php echo $parcourt_prof['age_enseignant'] ?>" type="number" min="10" name="age" required="" placeholder="Age">
                                            </div>
                                        </div> 
                                         <div class="form-group row">
                                            <div class="col-12">
                                                <label>Sexe</label>
                                                <select class="form-control" name="sexe" required="">
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
                                                <div>
                                                    <img src="<?php echo 'traitement/'.$parcourt_prof['photo_enseignant'] ?>" wi>
                                                </div>
                                                <div class="image">
                                                    <input type="file" name="photo" value="<?php echo $parcourt_prof['photo_enseignant'] ?>" id="photo" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-12">
                                               <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" name="modifier_prof" type="submit">Enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4" >
                                   <form class="form-horizontal" action="traitement/enregistrer_quartier_modif.php" method="POST">
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
                                </div>
                            </div><!-- end col -->
                            <!-- end edit -->
                             <?php
                                }
                                ?>
                      </div>
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

                <?php if (isset($_SESSION['message_supprimer_prof'])):?>
      <?php
        echo '<script type="text/javascript">';
        echo 'alert("';
        echo $_SESSION['message_supprimer_prof'];
        echo '")';
        echo "</script>";
        unset($_SESSION['message_supprimer_prof']);
     ?>
    <?php  endif ?>
    </body>
</html>
