<?php
$servername = "localhost";
$username = "root";  // default in XAMPP
$password = "";      // default is empty in XAMPP
$dbname = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
