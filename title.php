<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    if (!empty($title)) {
        $query = "update content set title = '$title'";
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
    <form method="POST" class="title">
        <label for="title">title</label>
        <input type="text" name="title">
        <input type="submit">
    </form>
</body>

</html>