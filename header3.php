<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $header3 = htmlspecialchars($_POST['header3']);
    if (!empty($header3)) {
        // $paragraph4 = "abc";
        //$query = "INSERT into content (paragraph4) values ('$paragraph4')";
        $query = "update content set header3 = '" . $header3 . "' WHERE id = 1 ";
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
    <form method="POST" class="header3">
        <label for="header3">header 3</label>
        <input type="text" name="header3">
        <input type="submit">
    </form>
</body>

</html>