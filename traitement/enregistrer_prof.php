<?php
	session_start();
	require_once "connexion_bdd.php";
	$conn = connexion();
  ?>

  <?php 
	if(isset($_POST['enregistrer_prof'])){
		$nom = $_POST['nom'];
		$profession = $_POST['profession'];
		$contact = $_POST['contact'];
		$salaire = $_POST['salaire'];
		$age = $_POST['age'];
		$quartier = $_POST['quartier'];
		$jours = $_POST['jours'];
		$sexe = $_POST['sexe'];
		$matiere = $_POST['matiere'];
		$date_enregistrer = date("y/m/d");

		//inserer une image
		  $target_dir = "images/";
		  $target_file = $target_dir .basename($_FILES["photo"]["name"]);
		  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		  
	    if(!$conn){
	    		$_SESSION['message_enregistrer_prof'] = "Erreur de connexion au serveur";
	    }else {
	    		$verif_prof = mysqli_query($conn,"SELECT * FROM enseignant WHERE nom_enseignant = '$nom' AND contact_enseignant = $contact");
	    		$count_verif = mysqli_num_rows($verif_prof);
	    		if ($count_verif != 0) {
	    			$_SESSION['message_enregistrer_prof'] = "Erreur mauvaise saisir d'informations ";
	    		}else{

	      		if(strlen($contact)<9){
	    				$_SESSION['message_enregistrer_prof'] = "Contact invalide";
	      			}else{
	      				if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "PNG" ) {
	    					$_SESSION['message_enregistrer_prof'] = "Erreur selectionner une image";
	      					}else{
	      						if (file_exists($target_file)) {
	      							$_SESSION['message_enregistrer_prof'] = "Erreur cette photo existe deja";
	      						}else{
	      								//move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
	      								$inserer_prof = mysqli_query($conn,"INSERT INTO enseignant(nom_enseignant,profession_enseignant,matiere_enseignant,contact_enseignant,salaire_enseignant,age_enseignant,sexe_enseignant,photo_enseignant,id_quartier,date_enregistrer,date_supression,date_payement_prof,presence,etat_enseignant) VALUES('$nom','$profession','$matiere',$contact,$salaire,$age,'$sexe','$target_file',$quartier,'$date_enregistrer','0000/00/0','0000/00/0',0,0); ");
	      								if ($inserer_prof) {
	      									$id_prof = mysqli_insert_id($conn);
	      									foreach($jours as $selectValue){
												$jours_enseignements = mysqli_query($conn,"INSERT INTO enseignant_jour(id_jour,id_enseignant) VALUES($selectValue,$id_prof)");
											}
											$_SESSION['message_enregistrer_prof'] = "Enregistrement de l'enseignant $nom reussir";
	      								}else{
	      									$_SESSION['message_enregistrer_prof'] = "Echec d'insertion de l'enseignant";
	      								}
				   				}
			   				}
	   				 }
	   			}
	   		 }
	   		 header("location: ../ajouter_prof.php");
		}
?>

<?php 
	if(isset($_GET['delete'])){
			$id_prof = $_GET['delete'];
			$date_prof = date("y/m/d");
			 if(!$conn){
	    		$_SESSION['message_supprimer_prof'] = "Erreur de connexion au serveur";
	    	}else{
	    		$delete_enseignant = mysqli_query($conn,"UPDATE enseignant SET etat_enseignant = 1, date_supression = '$date_prof' WHERE id_enseignant = $id_prof");
	    		if ($delete_enseignant) {
	    			$_SESSION['message_supprimer_prof'] = "Supression de l'enseignant reussir";
	    		}else{

	    			$_SESSION['message_supprimer_prof'] = "Echec de supression de l'enseignant";
				}
			}
	   		 header("location: ../liste_prof.php");
		}
 ?>


  <?php 
	if(isset($_POST['modifier_prof'])){
		$nom = $_POST['nom'];
		$profession = $_POST['profession'];
		$contact = $_POST['contact'];
		$salaire = $_POST['salaire'];
		$age = $_POST['age'];
		$quartier = $_POST['quartier'];
		$jours = $_POST['jours'];
		$sexe = $_POST['sexe'];
		$matiere = $_POST['matiere'];
		$date_enregistrer = $_POST['date'];


		if (basename($_FILES["photo"]["name"]) == "") {
			$_SESSION['message_supprimer_prof'] = "Erreur image absent";
			}else{
		 $target_dir = "images/";
		  $target_file = $target_dir .basename($_FILES["photo"]["name"]);
		  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		  $verif_image = mysqli_query($conn,"SELECT * FROM enseignant WHERE nom_enseignant = '$target_file' ");
		  $count_image = mysqli_num_rows($verif_image);

		  if ($count_image==0) {
		  	if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "PNG" ) {
	    		$_SESSION['message_supprimer_prof'] = "Erreur selectionner une image";
	      	}else{
		  		move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
		  	}
		  }

		  if(strlen($contact)<9){
	    	$_SESSION['message_supprimer_prof'] = "Contact invalide";
	      	}else{
	      			$update_prof = mysqli_query($conn,"UPDATE enseignant SET nom_enseignant = '$nom',profession_enseignant = '$profession',matiere_enseignant= '$matiere',contact_enseignant = $contact,salaire_enseignant = $salaire,age_enseignant = $age,sexe_enseignant = '$sexe', photo_enseignant = '' ");
	      		}

		  }

 header("location: ../liste_prof.php");


}
