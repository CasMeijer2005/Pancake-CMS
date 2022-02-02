<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>inloggen is gelukt</h1>
    <h2>welcome <?php echo $user_data["user_name"] ?></h2>
    <a href="logout.php">log out here</a>


</body>

</html>