<?php
session_start();
include("connection.php");
include("functions.php");
$title = mysqli_query($con, "SELECT title FROM content");
$header1 = mysqli_query($con, "SELECT header1 FROM content limit 1");
$header2 = mysqli_query($con, "SELECT header2 FROM content limit 1");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="icon" type="image/x-icon" href="assets/img/pancake.png"> <!-- Favicon -->
</head>

<body>
    <header>
        <h1><?php
            while ($row = mysqli_fetch_assoc($title)) {
                echo $row['title'];
            }
            ?>
        </h1>
    </header>
    <content>
        <h2><?php
            while ($row = mysqli_fetch_assoc($header1)) {
                echo $row['header1'];
            }
            ?></h2>
    </content>
    <footer>
        <h3>Here is where the content will end</h3>
    </footer>
    <figcaption>
        2022 Pancake
    </figcaption>
</body>

</html>