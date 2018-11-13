<?php
  function selectRole()
  {
      $select= "SELECT * FROM `Role`(`idRole`,`roleRole`)";
      return mysqli_query($_SESSION['connect'], $select) or die("Erreur envoie");
  }
  ?>