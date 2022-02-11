<?php
session_start();
include("connection.php");
include("functions.php");
$title = mysqli_query($con, "SELECT title FROM content");
$header1 = mysqli_query($con, "SELECT header1 FROM content limit 1");
$header2 = mysqli_query($con, "SELECT header2 FROM content limit 1");
$header3 = mysqli_query($con, "SELECT header3 FROM content limit 1");
$header4 = mysqli_query($con, "SELECT header4 FROM content limit 1");
$paragraph1 = mysqli_query($con, "SELECT paragraph1 FROM content limit 1");
$paragraph2 = mysqli_query($con, "SELECT paragraph2 FROM content limit 1");
$paragraph3 = mysqli_query($con, "SELECT paragraph3 FROM content limit 1");
$paragraph4 = mysqli_query($con, "SELECT paragraph4 FROM content limit 1");
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
        <p><?php
            while ($row = mysqli_fetch_assoc($paragraph1)) {
                echo $row['paragraph1'];
            }
            ?></p>

        <h2><?php
            while ($row = mysqli_fetch_assoc($header2)) {
                echo $row['header2'];
            }
            ?></h2>
        <p><?php
            while ($row = mysqli_fetch_assoc($paragraph2)) {
                echo $row['paragraph2'];
            }
            ?></p>
        <h2><?php
            while ($row = mysqli_fetch_assoc($header3)) {
                echo $row['header3'];
            }
            ?></h2>
        <p><?php
            while ($row = mysqli_fetch_assoc($paragraph3)) {
                echo $row['paragraph3'];
            }
            ?></p>
        <h2><?php
            while ($row = mysqli_fetch_assoc($header4)) {
                echo $row['header4'];
            }
            ?></h2>
        <p><?php
            while ($row = mysqli_fetch_assoc($paragraph3)) {
                echo $row['paragraph3'];
            }
            ?></p>
    </content>
    <footer>

    </footer>
    <figcaption>
        2022 Pancake
    </figcaption>
</body>

</html>