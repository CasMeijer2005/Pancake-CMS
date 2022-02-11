<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $paragraph2 = $_POST['paragraph2'];
    if (!empty($paragraph2)) {
        //$query = "INSERT into content (paragraph2) values ('$paragraph2')";
        $query = "update content set paragraph2 = '$paragraph2'";
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
    <form method="POST" class="paragraph2">
        <label for="paragraph2" id="paragraph">Paragraph 2</label>
        <input type="text"  id="text" name="paragraph2">
        <input type="submit" id="submit">
    </form>
</body>

</html>