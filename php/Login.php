<?php
// Start a session to store user data
session_start();

// // Connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'parlour');
require_once "connection.php";

// Get the username and password from the login form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query the database for the user
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

// Check if the query returned a user
if (mysqli_num_rows($result) == 1) {
  // The user exists, so set session variables and redirect to the home page
  $user = mysqli_fetch_assoc($result);
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['username'] = $user['username'];
  header('Location: ../Index.php');
} else {
  // The user doesn't exist, so display an error message
  echo "Invalid username or password.";
}
?>
