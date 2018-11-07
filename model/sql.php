<?php 
function projetselect() {
	$select = "SELECT * FROM `Projet` " ;
	$results = mysqli_query($_SESSION['connect'],$select);	
	return $results;

function actusselect(){
	$select= "select from `Actus`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`)";					;
	return mysqli_query($_SESSION['connect'],$select) or die ("Erreur envoie");
}
?>