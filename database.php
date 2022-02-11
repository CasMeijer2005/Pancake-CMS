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
    `password` VARCHAR(100) NOT NULL,
    `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Check if table was created
if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Create table
$sql = "CREATE TABLE IF NOT EXISTS content (
    `title` TEXT NOT NULL,
    `header1` TEXT NOT NULL,
    `header2` TEXT NOT NULL,
    `header3` TEXT NOT NULL,
    `header4` TEXT NOT NULL,
    `paragraph1` TEXT NOT NULL,
    `paragraph2` TEXT NOT NULL,
    `paragraph3` TEXT NOT NULL,
    `paragraph4` TEXT NOT NULL
)";

// Check if table was created
if ($conn->query($sql) === TRUE) {
    echo "Table content created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert voor update
$sql = "INSERT INTO content (`title`, `header1`, `header2`, `header3`, `header4`, `paragraph1`, `paragraph2`, `paragraph3`, `paragraph4`) VALUES (' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ')";

// Check if insertion was succesful
if ($conn->query($sql) === TRUE) {
    echo "Insertion succesful <br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

// Close connection
$conn->close();

?>