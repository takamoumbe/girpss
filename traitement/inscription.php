<?php
session_start();
	require_once "connexion_bdd.php";
	$conn = connexion();
  ?>


<?php 
if(isset($_POST['inscription'])){
	$email = $_POST['email'];
	$nom = $_POST['nom'];
	$Password = $_POST['Password'];
	$retype_Password = $_POST['retype_Password'];
	$quartier = $_POST['quartier'];




	if(!$conn){
		$_SESSION['message_inscription'] = "Erreur de connexion au serveur";
	}else {
            $verif = mysqli_query($conn,"SELECT * FROM admin");
            $count = mysqli_num_rows($verif);
               //se rassure que c est uniquement deux personne inscrit commme admin
      if($count < 2){
      		$information_diff = mysqli_query($conn,"SELECT * FROM admin WHERE email_admin='$email'");
      		$resultat = mysqli_num_rows($information_diff);
      	if($resultat==0){
        if(strlen($Password) <= 6){  //verification de la taille du mot de passe
          $_SESSION['message_inscription'] = "Mot de passe trop cour";
        }else if($Password != $retype_Password){
          $_SESSION['message_inscription'] = "Mot de passe different";
        }else {
        	if($quartier==0){
        			$_SESSION['message_inscription'] = "Choisir le quartier";
        		}else{
          				$inserer_admin = mysqli_query($conn,"INSERT INTO admin(nom_admin,email_admin,password_admin,id_quartier,etat_admin) VALUES('$nom','$email','$Password',$quartier,0)");
          				if($inserer_admin){
          					$_SESSION['message_inscription'] = "Inscription reussir";
      					}else {
            					$_SESSION['message_inscription'] = "Echec de tentative d'Inscription";
          					}
         				 }
       				 }
       				  //differents information
       				}else{
       					$_SESSION['message_inscription'] = "Desoler vos informations de ne sont pas correct";
       				}
      			}else{//message renvoyer en cas de 2 admin deja present dans la bd
        			$_SESSION['message_inscription'] = "Impossible de vous enregistrer";
      		}
    	}
    header("location: ../inscription.php");
  }

 ?>