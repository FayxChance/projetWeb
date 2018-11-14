<?php
session_start();
include "./model/sqlUser.php";


while ($row = mysqli_fetch_assoc(selectAllUtilisateurs())) {
		if $_POST['pseudo_login']==$row['pseudoUtilisateur'] and $_POST['motdepasse_login']==$row['mdpUtilisateur'] {
		$_SESSION['connecte']=true;
		}
	}	
?>