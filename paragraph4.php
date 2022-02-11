<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $paragraph4 = $_POST['paragraph4'];
    if (!empty($paragraph4)) {
        //$query = "INSERT into content (paragraph4) values ('$paragraph4')";
        $query = "update content set paragraph4 = '$paragraph4'";
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
    <form method="POST" class="paragraph4">
        <label for="paragraph4">header 2</label>
        <input type="text" name="paragraph4">
        <input type="submit">
    </form>
</body>

</html>