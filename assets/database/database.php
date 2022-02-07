<?php

// Database name and password
$username = "root";
$password = "";
$dbname = "pancakecms";
$hostname = "localhost";

// Connect to database
$conn = new mysqli($hostname, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS pancakecms";

// Check creation of database
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select database for creation of table
$conn = new mysqli($hostname, $username, $password, $dbname);

// Create table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id bigint(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `user_id` bigint(20) NOT NULL,
    `user_name` VARCHAR(100) NOT NULL,
    `user_email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Check if table was created
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();

// __/\\\\\\\\\\\\\____/\\\________/\\\__/\\\\\\\\\\\\\______________/\\\\\\\\\\\_____/\\\\\\\\\\\______________/\\\\\\\\\\\\\\\__/\\\________/\\\__/\\\\\_____/\\\_        
// _\/\\\/////////\\\_\/\\\_______\/\\\_\/\\\/////////\\\___________\/////\\\///____/\\\/////////\\\___________\/\\\///////////__\/\\\_______\/\\\_\/\\\\\\___\/\\\_       
//  _\/\\\_______\/\\\_\/\\\_______\/\\\_\/\\\_______\/\\\_______________\/\\\______\//\\\______\///____________\/\\\_____________\/\\\_______\/\\\_\/\\\/\\\__\/\\\_      
//   _\/\\\\\\\\\\\\\/__\/\\\\\\\\\\\\\\\_\/\\\\\\\\\\\\\/________________\/\\\_______\////\\\___________________\/\\\\\\\\\\\_____\/\\\_______\/\\\_\/\\\//\\\_\/\\\_     
//    _\/\\\/////////____\/\\\/////////\\\_\/\\\/////////__________________\/\\\__________\////\\\________________\/\\\///////______\/\\\_______\/\\\_\/\\\\//\\\\/\\\_    
//     _\/\\\_____________\/\\\_______\/\\\_\/\\\___________________________\/\\\_____________\////\\\_____________\/\\\_____________\/\\\_______\/\\\_\/\\\_\//\\\/\\\_   
//      _\/\\\_____________\/\\\_______\/\\\_\/\\\___________________________\/\\\______/\\\______\//\\\____________\/\\\_____________\//\\\______/\\\__\/\\\__\//\\\\\\_  
//       _\/\\\_____________\/\\\_______\/\\\_\/\\\________________________/\\\\\\\\\\\_\///\\\\\\\\\\\/_____________\/\\\______________\///\\\\\\\\\/___\/\\\___\//\\\\\_ 
//        _\///______________\///________\///__\///________________________\///////////____\///////////_______________\///_________________\/////////_____\///_____\/////__
