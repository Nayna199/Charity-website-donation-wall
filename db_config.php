<?php
$servername = "localhost";
$username = "root";
$password = ""; // Add your MySQL password if set
$dbname = "charity_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
