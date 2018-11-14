<?php
  function selectActus($id)
  {
      $select= "SELECT (`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) FROM `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) WHERE id=$id";
      return mysqli_query($_SESSION['connect'], $select) or die("Erreur envoie");
  }

 function deleteActus($id)
  {
      $delete= "DELETE * FROM `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) WHERE id=$id ";
      return mysqli_query($_SESSION['connect'], $delete) or die("Erreur envoie");
  } 

   function inserActus($titre,$date,$utilisateur,$contenu)
  {
      $inser= "INSERT INTO `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`)
                    VALUES('$titre', '$date', '$utilisateur', '$contenu')";
      return mysqli_query($_SESSION['connect'], $inser) or die("Erreur envoie");
  } 
  ?>