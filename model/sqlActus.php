<?php
  function selectActus()
  {
      $select= "SELECT * FROM `Actus`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`)";
      return mysqli_query($_SESSION['connect'], $select) or die("Erreur envoie");
  }
