<?php
	session_start();
	require_once "connexion_bdd.php";
	$conn = connexion();
  ?>

  <?php 
	if(isset($_POST['enregistrer_prof'])){
		$nom = $_POST['nom'];
		$password = $_POST['password'];
		$profession = $_POST['profession'];
		$contact = $_POST['contact'];
		$salaire = $_POST['salaire'];
		$age = $_POST['age'];
		$quartier = $_POST['quartier'];
		$image = $_POST['image'];

		//inserer une image
		  $target_dir = "images_prof/";
		  $target_file = $target_dir . basename($_FILES["photo"]["name"]);
		  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	    if(!$conn){
	    		$_SESSION['message_enregistrer_prof'] = "Erreur de connexion au serveur";
	    }else {
	      		if(strlen($contact)<9){
	    				$_SESSION['message_enregistrer_prof'] = "Contact invalide";
	      			}else{
	      				if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "PNG" ) {
	    					$_SESSION['message_enregistrer_prof'] = "Erreur selectionner une image";
	      					}else{
	      						if (file_exists($target_file)) {
	      							$_SESSION['message_enregistrer_prof'] = "Erreur cette photo existe deja";
	      						}else{
				      					$inserer_prof = mysqli_query($conn,"INSERT INTO enseignant(nom_enseignant,profession_enseignant,contact_enseignant,salaire_enseignant,age_enseignant,photo_enseignant,id_quartier,etat_enseignant) VALUES('$nom','$profession','$contact','$salaire',$age,'$target_file',$quartier,0)");
				   					 
				   				}
			   				}
	   				 }
	   		 }
	   		 header("location: ../ajouter_prof.php");
		}
?>