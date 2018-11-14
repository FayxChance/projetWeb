<?php
include"sqlActus.php";
session_start();
    function afficheActu(){
        $results = mysqli_query($_SESSION['connect'], $select) or die("Erreur envoie");
                while ($row = mysqli_fetch_assoc($results))
                {
                    echo "<section>
                            <h2>"        .$row['titreActus']."                             </h2>
                            <h4>"        .$row['utilisateurActusdateActus']."    </h4>
                            <h4>"        .$row['dateActus']."                             </h4>
                            <p>"          .$row['contenuActus']."                       </p>
                            </section>"
                }
    }

    function affiche