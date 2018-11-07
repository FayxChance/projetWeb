<?php>
function actusselect(){
	$select= "select from `Actus`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`)";					;
	return mysqli_query($_SESSION['connect'],$select) or die ("Erreur envoie");
}
?>