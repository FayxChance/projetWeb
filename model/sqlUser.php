<?php
function selectUtilisateur($id)
{
    $select="SELECT * FROM Utilisateurs WHERE idUtilisateur=$id";
    return mysqli_query($_SESSION['connect'], $select);
}
