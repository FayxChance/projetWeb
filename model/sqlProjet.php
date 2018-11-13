<?php
  function selectProjet()
  {
      $select= "SELECT * FROM `Projet`(`utilisateurProjet`,`titreProjet`,`descriptionProjet`)";
      return mysqli_query($_SESSION['connect'], $select) or die("Erreur envoie");
  }

 function deleteProjet($id)
  {
      $delete= "DELETE * FROM `Projet`(`utilisateurProjet`,`titreProjet`,`descriptionProjet`) WHERE id=$id ";
      return mysqli_query($_SESSION['connect'], $delete) or die("Erreur envoie");
  } 

   function inserProjet($nom,$description,$date,$lieu)
  {
      $inser= "INSERT INTO `Projet`(`utilisateurProjet`,`titreProjet`,`descriptionProjet`)
                    VALUES($nom','$description','$date','$lieu')";
      return mysqli_query($_SESSION['connect'], $inser) or die("Erreur envoie");
  } 
  ?>