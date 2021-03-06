<?php
// Start sessie
session_start();

// Runt connection.php en function.php voordat de pagina wordt geladen
include("connection.php");
include("functions.php");

// Method naar POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = hash("sha256", $_POST['password']);

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        // Read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        // Checked of de username al bestaat
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
        echo "Wrong username or password!";
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
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="icon" type="image/x-icon" href="assets/img/pancake.png">
</head>

<body>
    <form method="POST">
        <input type="text" class="input" id="user_name" name="user_name" placeholder="Username" required> <!-- Het username veld -->
        <input type="password" class="input" id="password" name="password" placeholder="Password" required> <!-- Het wachtwoord veld -->
        <input type="submit" id="submit" value="Login" href="index.php"> <!-- De submit knop -->
    </form>
    <img src="assets/img/google.png" id="google" onclick="google()"> <!-- Sign in with google foto -->
    <p id="signuptext"></p> <!-- De <p> laat "This feature is under maintenance" zien -->
    <a href="signup.php" id="signup">Sign up here</a> <!-- Redirect naar signup.php -->
    <script src="assets/js/login.js"></script>
    <figcaption>
        2022 Pancake
    </figcaption>
</body>

</html>
<!-- Einde HTML -->