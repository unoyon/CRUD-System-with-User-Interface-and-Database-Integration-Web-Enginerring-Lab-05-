<?php
// db.php - Database connection file

$servername = "localhost";
$username = "root"; // Default phpMyAdmin username
$password = ""; // Default phpMyAdmin password (empty)
$dbname = "crud_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>