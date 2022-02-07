<?php // Start PHP
// Hier stopt de session (Het logt je uit)
session_start();
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
}
// Redirect de user naar de login pagina
header("location: login.php");
die;
?> <!-- Einde PHP -->