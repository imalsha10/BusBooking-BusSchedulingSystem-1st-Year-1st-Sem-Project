<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "bus_shcheduling_booking_system";

// Create a new database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
