<?php

$host = "localhost"; // MySQL server hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "parlour"; // MySQL database name

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
