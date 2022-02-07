<?php
// Sessie starten
session_start();
include("connection.php");
include("functions.php");

// Zet request method op post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //SOMETHING WAS POSTED
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $password = hash("sha256", $_POST['password']);

    $check_duplicate_username = "SELECT `user_name` FROM `users` WHERE `user_name` = '$user_name' ";

    $result = mysqli_query($con, $check_duplicate_username);

    $count = mysqli_num_rows($result);

    // Start HTML
    if ($count > 0) {
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
                <input type="email" class="input" id="email" name="email" placeholder="Email" required>
                <input type="password" class="input" id="password" name="password" placeholder="Password">
                <input type="submit" id="submit" value="Sign up">
            </form>
            <img src="assets/img/google.png" id="google" onclick="google()">
            <a href="login.php" id="signup">Login here</a>
            <script src="assets/js/login.js"></script>
        </body>';
    
        // Geeft aan of de username al in gebruik is
        echo "<script>
                alert('Username $user_name already taken!');
            </script>";

        return false;
    }

    if (!empty($user_name) && !empty($password) && !empty($user_email) && !is_numeric($user_name)) {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,user_email,password) values ('$user_id','$user_name','$user_email','$password')";
        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "please enter some valid information!";
    }
}

?>

<!-- Einde PHP, Start HTML -->
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
        <input type="text" id="user_name" name="user_name" placeholder="Username" required> <!-- Het username veld -->
        <input type="email" class="input" id="email" name="user_email" placeholder="Email" required> <!-- Het email veld -->
        <input type="password" class="input" id="password" name="password" placeholder="Password" required> <!-- Het wachtwoord veld -->
        <input type="password" class="input" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required> <!-- Bekijkt of het wachtwoord hetzelfde is met het wachtwoord veld hierboven -->
        <input type="submit" id="submit" value="Sign up">
    </form>
    <img src="assets/img/google.png" id="google" onclick="google()">
    <p id="signuptext"></p> <!-- De <p> laat "This feature is under maintenance" zien -->
    <a href="login.php" id="signup">Login here</a>
    <script src="assets/js/login.js"></script>
</body>

</html>
