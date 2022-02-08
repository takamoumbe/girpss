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
        <title>Renitialiser le mot de passe</title>
        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <div class="m-t-10 m-b-10">
                                        <a href="index.html" class="text-success">
                                          <a href="#" class="logo"><span>GIR<span>PSS</span></span><i class="mdi mdi-layers"></i></a>
                                        </a>
                                    </div>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="traitement/recuperer_pass.php" method="post">
                                         <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="email" name="email" required="" placeholder="Email" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" required="" name="Password" placeholder="Mot de passe" required="" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" required="" name="retype_Password" placeholder="Confirmer" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn w-md btn-danger btn-bordered waves-effect waves-light" name="valider_pass" type="submit">Envoyer</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Voulez-vous abandonner ?<a href="index.php" class="text-primary m-l-5"><b>Connexion</b></a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

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
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


      <?php if (isset($_SESSION['message_valider_pass'])):?>
      <?php
        echo '<script type="text/javascript">';
        echo 'alert("';
        echo $_SESSION['message_valider_pass'];
        echo '")';
        echo "</script>";
        unset($_SESSION['message_valider_pass']);
     ?>
    <?php  endif ?>


    </body>
</html>
