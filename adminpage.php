<?php

session_start();
include("connection.php");
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/adminpage.css">
    <title>Admin Page</title>
</head>

<body>
    <h1>Admin page</h1>
    <div id="box">
        <a href="title.php">Click here to edit the title</a><br>
        <a href="header1.php">Click here to edit the First header</a><br>
        <a href="header2.php">Click here to edit the Second header</a><br>
        <a href="header3.php">Click here to edit the Third header</a><br>
        <a href="header4.php">Click here to edit the Fourth header</a><br>
        <a href="paragraph1.php">Click here to edit the First paragraph</a><br>
        <a href="paragraph2.php">Click here to edit the Second paragraph</a><br>
        <a href="paragraph3.php">Click here to edit the Third paragraph</a><br>
        <a href="paragraph4.php">Click here to edit the Fourth paragraph</a><br>
    </div>
</body>

</html>