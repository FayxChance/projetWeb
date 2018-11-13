<?php
  session_start();
  include './includes/db.php';
  include "./includes/header.php";
  include "./model/sqlUser.php";
  include "./model/sqlActus.php";
  $id=1;
  $utilisateur=selectUtilisateur($id);
  echo mysqli_fetch_assoc($utilisateur["idUtilisateur"]);
?>


<?php
  include "./includes/footer.php";
?>
