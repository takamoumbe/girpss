<?php
	session_start();
	require_once "connexion_bdd.php";
	$conn = connexion();
  ?>
<?php 
	if(isset($_POST['enregistrer_quartier'])){
		$quartier_absent = $_POST['quartier_absent'];

		if(!$conn){
		$_SESSION['enregistrer_quartier'] = "Erreur de connexion au serveur";
	}else {

			$verif_quartier = mysqli_query($conn,"SELECT * FROM quartier WHERE nom_quartier = '$quartier_absent' ");
			$counter_quartier = mysqli_num_rows($verif_quartier);
			if ($counter_quartier>0) {
				$_SESSION['enregistrer_quartier'] = "Désoler ce quartier existe déjà";
			}else{
				$enregistrer_prof = mysqli_query($conn,"INSERT INTO quartier(nom_quartier,etat_quartier) VALUES('$quartier_absent',0)");
				if($enregistrer_prof){
				$_SESSION['enregistrer_quartier'] = "Enregistrement réussir";
				}else{
				$_SESSION['enregistrer_quartier'] = "Erreur echec d'enregistrement";
				}
			}
			header("location: ../ajouter_prof.php");
		}
		
}