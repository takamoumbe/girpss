<?php
session_start();
	require_once "connexion_bdd.php";
	$conn = connexion();
  ?>


<?php 
if(isset($_POST['recuperer_pass'])){
	$email = $_POST['email'];

    if(!$conn){
    		$_SESSION['message_recuperer_pass'] = "Erreur de connexion au serveur";
    }else {
      $recuperer_pass = mysqli_query($conn,"SELECT * FROM admin WHERE email_admin = '$email'");
        if($recuperer_pass){
          $count = mysqli_num_rows($recuperer_pass);
          if ($count == 1){
            header("location: ../renitialiser_pass.php");
          }else{
            $_SESSION['message_recuperer_pass'] = "Email incorect";
            header("location: ../recuperer_pass.php");
          }
        }
    }
	}

  if(isset($_POST['valider_pass'])){
  $email = $_POST['email'];
  $Password = $_POST['Password'];
  $retype_Password = $_POST['retype_Password'];

    if(!$conn){
        $_SESSION['message_valider_pass'] = "Erreur de connexion au serveur";
    }else {

            $verif_email = mysqli_query($conn,"SELECT * FROM admin WHERE email_admin = '$email'");
            if($verif_email){
                $count = mysqli_num_rows($verif_email);
                  if ($count == 1){
                         if(strlen($Password) <= 6){  //verification de la taille du mot de passe
                              $_SESSION['message_valider_pass'] = "Mot de passe trop cour";
                          }else if($Password != $retype_Password){
                              $_SESSION['message_valider_pass'] = "Mot de passe different";
                           }else{
                                $update_pass = mysqli_query($conn,"UPDATE admin SET password_admin = '$Password' WHERE email_admin = '$email'");
                                if($update_pass){
                                  $_SESSION['message_valider_pass'] = "Mot de passe renitialiser avec succes";
                                 }else{
                                  $_SESSION['message_valider_pass'] = "Echec de renitialisation de mot de passe";
                                  }
                          }
                        }else{
                           $_SESSION['message_valider_pass'] = "Email incorrect";
                   }
               }
        }
    header("location: ../renitialiser_pass.php");
    }
?>
