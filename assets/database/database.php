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
$sql = "CREATE DATABASE pancakecms";

// Check creation of database
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select database for creation of table
$conn = new mysqli($hostname, $username, $password, $dbname);

// Create table
$sql = "CREATE TABLE users (
    id bigint(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `user_id` bigint(20) NOT NULL,
    `user_name` VARCHAR(100) NOT NULL,
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

?>