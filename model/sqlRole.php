<?php
  function selectRole()
  {
      $select= "SELECT (`idRole`,`roleRole`) FROM `Role`(`idRole`,`roleRole`) WHERE id=$id";
      return mysqli_query($_SESSION['connect'], $select) or die("Erreur envoie");
  }
  ?>