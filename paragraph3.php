<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $paragraph3 = $_POST['paragraph3'];
    if (!empty($paragraph3)) {
        //$query = "INSERT into content (paragraph3) values ('$paragraph3')";
        $query = "update content set paragraph3 = '$paragraph3'";
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
    <title>Edit the paragraph</title>
</head>

<body>
    <form method="POST" class="paragraph3">
        <label for="paragraph3">Paragraph 3</label>
        <input type="text" name="paragraph3">
        <input type="submit">
    </form>
</body>

</html>