<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $paragraph4 = htmlspecialchars($_POST['paragraph4']);
    if (!empty($paragraph4)) {
        // $paragraph4 = "abc";
        //$query = "INSERT into content (paragraph4) values ('$paragraph4')";
        $query = "update content set paragraph4 = '" . $paragraph4 . "' WHERE id = 1 ";
        echo $query;
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
    <form method="POST" class="paragraph4">
        <label for="paragraph4" id="paragraph">Paragraph 4</label>
        <input type="text" id="text" name="paragraph4">
        <input type="submit" id="submit">
    </form>
</body>

</html>