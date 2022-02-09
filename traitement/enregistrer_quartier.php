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
			$enregistrer_prof = mysqli_query($conn,"INSERT INTO quartier(nom_quartier,etat_quartier) VALUES('$quartier_absent',0)");
			if($enregistrer_prof){
			$_SESSION['enregistrer_quartier'] = "Enregistrement reussir";
			}else{
			$_SESSION['enregistrer_quartier'] = "Erreur echec d'Enregistrement";
			}
    			header("location: ../ajouter_prof.php");
		}
		
}