<?php
session_start();
$host_name = '10.103.1.102';
$database = 'ScriptGate';
$user_name = 'root';
$password = 'RooT!';
$connect = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_connect_errno()) {
    die('<p>La connexion au serveur MySQL a échoué: '.mysqli_connect_error().'</p>');
} else {
    $_SESSION['connect']=$connect; // Si la connexion réussit, stock la connexion dans le tableau session, pas besoin d'include
}
