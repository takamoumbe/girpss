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
		$quartierAbsent = $_POST['quartier_absent'];

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
				      				if($quartier ==0 && $quartierAbsent == ""){
				    					$_SESSION['message_enregistrer_prof'] = "Entrer ou selectionner un quartier";
				   		 			}elseif($quartier ==0 && $quartier_absent != ""){
				   		 				if (move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file)) {
				   		 					//insersion de l enseignant avec quartier
				   		 				}
				   					 }elseif($quartier !=0 && $quartier_absent != ""){
				   		 					$_SESSION['message_enregistrer_prof'] = "Erreur remplissez un des champs correspondant au quartier";
				   					 }elseif($quartier !=0 && $quartier_absent == ""){
				   					 	if (move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file)) {
				   		 					//insertion de l enseignant sans quartier
				   		 				}
				   					 }
				   				}
			   				}
	   				 }
	   		 }
	   		 header("location: ../ajouter_prof.php");
		}
?>