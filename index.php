<?php
// Hier start de session
session_start();
include("assets/database/database.php");
include("connection.php");
include("functions.php");

// Checked of de user is ingelogd
$user_data = check_login($con);
?>

<!-- Start HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login geslaagd!</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" type="image/x-icon" href="assets/img/pancake.png">
</head>

<body>
    <div id="box">
        <!-- Login succes -->
        <img src="assets/img/checkmark.png" id="checkmark">
        <h1>Login succesful!</h1>
        <h2>Welcome <?php echo $user_data["user_name"] ?></h2>
    </div>
</body>

</html>
