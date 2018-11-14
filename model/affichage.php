<?php
include"sqlActus.php";
include"sqlUser.php";
session_start();



    function afficheActu(){
        $row= mysqli_fetch_assoc(selectActus);
        $utlisateur=mysqli_fetch_assoc(selectUtilisateur($row['utilisateurActus']));
        while ($row)
            {
                     echo "<section>
                            <h2>"        .$row['titreActus']."                             </h2>
                            <h4>"        .$utlisateur['nomUtilisateur']."                    </h4>
                            <h4>"        .$row['dateActus']."                             </h4>
                            <p>"          .$row['contenuActus']."                       </p>
                            </section>";
                     $row=mysqli_fetch_assoc($row);
                     $utlisateur=mysqli_fetch_assoc($utilisateur);
                }
    }

    function afficheEvent(){
        
		
		while ($row = mysqli_fetch_assoc($results)){

            echo "<table>";
			    <tr>
                for (i=1; i<13; i++){
					echo"<th>".i."</th>"
                    for (j=1; j<32 ;j++){
                        echo"<tr>
                    }
                }
					<th>Description</th>
                    <th>Date</th>
                    <th>Lieu</th>
				</tr>";
		echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['blague']."</td>
			</tr>";
	    }
	    echo "</table>";
    }







    }