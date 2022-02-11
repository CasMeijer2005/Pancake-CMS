<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $header2 = htmlspecialchars($_POST['header2']);
    if (!empty($header2)) {
        // $paragraph4 = "abc";
        //$query = "INSERT into content (paragraph4) values ('$paragraph4')";
        $query = "update content set header2 = '" . $header2 . "' WHERE id = 1 ";
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
    <form method="POST" class="header2">
        <label for="header2">header 2</label>
        <input type="text" name="header2">
        <input type="submit">
    </form>
</body>

</html>