<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
    } else {
        echo "wrong username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="icon" type="image/x-icon" href="assets/img/pancake.png">
</head>
<body>
    <form method="POST">
        <input type="text" class="input" id="user_name" name="user_name" placeholder="Username" required> <!-- Het username veld -->
        <input type="password" class="input" id="password" name="password" placeholder="Password" required> <!-- Het wachtwoord veld -->
        <input type="submit" id="submit" value="Login"> <!-- De submit knop -->
    </form>
    <img src="assets/img/google.png" id="google" onclick="google()">  <!-- Sign in with google foto -->
    <a href="signup.php" id="signup">Signup here</a>  <!-- Redirect naar signup.php -->
    <script src="assets/js/login.js"></script>
</body>
</html>