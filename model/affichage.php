<?php
include"sqlActus.php";
include"sqlUser.php";
session_start();



    function afficheActu(){
        $row= mysqli_fetch_assoc(selectActus)
        $utlisateur=mysqli_fetch_assoc(selectUtilisateur($row['utilisateurActus']));
        while ($row)
            {
                   
                    echo "<section>
                            <h2>"        .$row['titreActus']."                             </h2>
                            <h4>"        .$utlisateur['nomUtilisateur']."                    </h4>
                            <h4>"        .$row['dateActus']."                             </h4>
                            <p>"          .$row['contenuActus']."                       </p>
                            </section>";
                            $utlisateur=mysqli_fetch_assoc()
                }
    }

    function affiche