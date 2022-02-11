<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $paragraph3 = htmlspecialchars($_POST['paragraph3']);
    if (!empty($paragraph3)) {
        // $paragraph4 = "abc";
        //$query = "INSERT into content (paragraph4) values ('$paragraph4')";
        $query = "update content set paragraph3 = '" . $paragraph3 . "' WHERE id = 1 ";
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
    <form method="POST" class="paragraph3">
        <label for="paragraph3" id="paragraph">Paragraph 3</label>
        <input type="text" id="text" name="paragraph3">
        <input type="submit" id="submit">
    </form>
</body>

</html>