<?php
session_start();
	require_once "connexion_bdd.php";
	$conn = connexion();
  ?>


<?php 
if(isset($_POST['connexion'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

    if(!$conn){
    		$_SESSION['message_connexion'] = "Erreur de connexion au serveur";
    }else {
      $connexion = mysqli_query($conn,"SELECT * FROM admin WHERE email_admin = '$email' AND password_admin = '$password'");
        if($connexion){
          $count = mysqli_num_rows($connexion );
          $row = $connexion ->fetch_assoc();
          if ($count == 1){
            $_SESSION['nom'] = $row['nom_admin'];
            header("location: ../acceuil.php");
          }else{
            $_SESSION['message_connexion'] = "Le nom ou le mot de passe est incorect";
            header("location: ../index.php");
          }
        }
    }
	}
?>
