<?php

session_start();
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];

    // $header1 = $_POST['header2'];
    // $header3 = $_POST['header3'];
    // $header4 = $_POST['header4'];
    // $paragraph1 = "";
    // $paragraph2 = "";
    // $paragraph3 = "";
    // $paragraph4 = "";
    if (!empty($title)) {
        $query = "insert into content (title) values ('$title')";
    }

    // if (!empty($header2)) {
    //     $query = "insert into content (header2) values ('$header2')";
    // }
    // if (!empty($header3)) {
    //     $query = "insert into content (header3) values ('$header3')";
    // }
    // if (!empty($header4)) {
    //     $query = "insert into content (header4) values ('$header4')";
    // }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $header1 = $_POST['header1'];
    if (!empty($header1)) {
        $query = "insert into content (header1) values ('$header1')";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>
    <h1>admin page</h1>
    <form method="POST" class="title">
        <label for="title">title</label>
        <input type="text" name="title">
        <input type="submit">
    </form>
    <form method="POST" class="header1">
        <label for="title">header 1</label>
        <input type="text" name="header1">
        <input type="submit">
    </form>
    <!-- <form method="POST" class="header2">
        <label for="title">header 2</label>
        <input type="text" name="header2">
        <input type="submit">
    </form>
    <form method="POST" class="header3">
        <label for="title">header 3</label>
        <input type="text" name="header3">
        <input type="submit">
    </form>
    <form method="POST" class="header4">
        <label for="title">header 4</label>
        <input type="text" name="header4">
        <input type="submit"> -->
    </form>
</body>

</html>