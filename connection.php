<?php
$servername = "localhost";
$username = "id22164679_admin123";
$password = "Admin@123";
$dbname = "id22164679_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
