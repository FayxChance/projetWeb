<?php 
function projetselect() {
	$select = "SELECT * FROM `Projet` " ;
	$results = mysqli_query($_SESSION['connect'],$select);	
	return $results;
}
?>