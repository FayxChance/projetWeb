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
		<input type='password' name='motdepasse_login' size='20'/>
	</p>
	<p>
		<label for='action'></label>
		<input type='submit' name='action' value='Connexion'/>
	</p>

	</form>");
}
?>