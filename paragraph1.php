<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $paragraph1 = $_POST['paragraph1'];
    if (!empty($paragraph1)) {
        // $query = "INSERT into content (paragraph1) values ('$paragraph1')";
        $query = "update content set paragraph1 = '$paragraph1'";
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
    <title>Edit the paragraph</title>
</head>

<body>
    <form method="POST" class="paragraph1">
        <label for="paragraph1" id="paragraph">Paragraph 1</label>
        <input type="text" id="text" name="paragraph1">
        <input type="submit" id="submit">
    </form>
</body>

</html>