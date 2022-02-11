<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $header4 = htmlspecialchars($_POST['header4']);
    if (!empty($header4)) {
        // $paragraph4 = "abc";
        //$query = "INSERT into content (paragraph4) values ('$paragraph4')";
        $query = "update content set header4 = '" . $header4 . "' WHERE id = 1 ";
        mysqli_query($con, $query);
    }
    header("Location: adminpage.php");
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/headerparagraph.css">
    <title>Edit the header</title>
</head>

<body>
    <form method="POST" class="header4">
        <label for="header4" id="header">Header 4</label>
        <input type="text" id="text" name="header4">
        <input type="submit" id="submit">
    </form>
</body>

</html>