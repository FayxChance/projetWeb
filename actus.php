<?php
  session_start();
  include './includes/db.php';
  include "./includes/header.php";
  include "./model/sqlUser.php";
  include "./model/sqlActus.php";
  include "./model/affichage.php";
  $id=1;
  $utilisateur=selectUtilisateur($id);
  echo mysqli_fetch_assoc($utilisateur["idUtilisateur"]);




  include "./includes/footer.php";
?>
