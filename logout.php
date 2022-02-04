<?php
// Hier stopt de session (Het logt je uit)
session_start();
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
}

header("location: login.php");
die;