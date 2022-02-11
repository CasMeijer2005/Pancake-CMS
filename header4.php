<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $header4 = $_POST['header4'];
    if (!empty($header4)) {
        // $query = "INSERT into content (header1) values ('$header1')";
        $query = "update content set header4 = '$header4'";
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
    <form method="POST" class="header4">
        <label for="header4">header 1</label>
        <input type="text" name="header4">
        <input type="submit">
    </form>
</body>

</html>