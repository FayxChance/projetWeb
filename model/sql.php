<?php 
function projetselect() {
	$select = "SELECT * FROM `Projet` " ;
	$results = mysqli_query($_SESSION['connect'],$select);	
	return $results;

function actusselect(){
	$select= "SELECT * FROM `Actus`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`)";					;
	return mysqli_query($_SESSION['connect'],$select) or die ("Erreur envoie");
}

function utilisateurSelect($id){
	$select="SELECT * FROM Utilisateurs WHERE (idUtilisateur=$id) ";
	return mysqli_query($_SESSION['connect'],$select);
} 
?>