<?php
  function selectActus()
  {
      $select= "SELECT * FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`)";
      return mysqli_query($_SESSION['connect'], $select) or die("Erreur envoie");
  }

 function deleteActus($id)
  {
      $delete= "DELETE * FROM ``Evenement``(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) WHERE id=$id ";
      return mysqli_query($_SESSION['connect'], $delete) or die("Erreur envoie");
  } 

   function inserActus($id,$nom,$description,$date,$lieu)
  {
      $inser= "INSERT INTO `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`)
                    VALUES('$id','$nom','$description','$date','$lieu')";
      return mysqli_query($_SESSION['connect'], $inser) or die("Erreur envoie");
  } 
  ?>