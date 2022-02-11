<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $header1 = htmlspecialchars($_POST['header1']);
    if (!empty($header1)) {
        // $paragraph4 = "abc";
        //$query = "INSERT into content (paragraph4) values ('$paragraph4')";
        $query = "update content set header1 = '" . $header1 . "' WHERE id = 1 ";
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
    <title>Document</title>
</head>

<body>
    <form method="POST" class="header1">
        <label for="header1">header 1</label>
        <input type="text" name="header1">
        <input type="submit">
    </form>
</body>

</html>