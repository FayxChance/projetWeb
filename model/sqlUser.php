<?php
function selectUtilisateur($id)
{
    $select="SELECT * FROM Utilisateurs WHERE idUtilisateur=$id";
    return mysqli_query($_SESSION['connect'], $select);
}

function selectAllUtilisateurs()
{
	$select="SELECT * FROM Utilisateurs ";
	return mysqli_query($_SESSION['connect'], $select) ;

}
?>