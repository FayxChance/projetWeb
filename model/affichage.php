<?php

session_start();
function formulaire_login ()
{
	echo("
	<form method='post' action='login.php'>
	<p>
		<label for='pseudo_login'>Pseudo</label>
		<input type='text' name='pseudo_login'/>
	</p>
	<p>
		<label for='motdepasse_login'>Mot de passe</label>
		<input type='password' name='motdepasse_login' size='16'/>
	</p>
	<p>
		<label for='action'></label>
		<input type='submit' name='action' value='Connexion'/>
	</p>

	</form>");
}

include"sqlActus.php";
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

 
