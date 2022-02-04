<?php

session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMETHING WAS POSTED
    $user_name = $_POST['user_name'];
    $password = hash("sha256", $_POST['password']);

    $check_duplicate_username = "SELECT `user_name` FROM `users` WHERE `user_name` = '$user_name' ";

    $result = mysqli_query($con, $check_duplicate_username);

    $count = mysqli_num_rows($result);

    if($count > 0) {
        echo '<html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/login.css">
            <title>Sign up</title>
        </head>
        
        <body>
            <form method="POST">
                <label id="usernameTaken"></label>
                <input type="text" class="input" id="user_name" name="user_name" placeholder="Username">
                <input type="password" class="input" id="password" name="password" placeholder="Password">
                <input type="submit" id="submit" value="sign up">
            </form>
            <img src="assets/img/google.png" id="google" onclick="google()">
            <a href="login.php" id="signup">login here</a>
            <script src="assets/js/login.js"></script>
        </body>';

        echo "<script>
                alert('Username $user_name already taken!');
            </script>";

        return false;
    }

    if (!empty($user_name) && !empty($password)  && !is_numeric($user_name)) {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "please enter some valid information!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Sign up</title>
</head>

<body>
    <form method="POST">
        <label id="usernameTaken"></label>
        <input type="text" class="input" id="user_name" name="user_name" placeholder="Username">
        <input type="password" class="input" id="password" name="password" placeholder="Password">
        <input type="submit" id="submit" value="sign up">
    </form>
    <img src="assets/img/google.png" id="google" onclick="google()">
    <a href="login.php" id="signup">login here</a>
    <script src="assets/js/login.js"></script>
</body>

</html>