<?php
// Start a session to store user data
session_start();

// // Connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'parlour');
require_once "connection.php";

// Get the username and password from the login form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

// Check if the query returned a user
if (mysqli_num_rows($result) >= 1) {
    echo '<script>alert("User already exists\nPlease Login!"); window.location.href = "../Login.php";</script>';
    // $userExists = true;
    // Set an error message to display in the modal
    // $errorMsg = "User already exists. Please choose a different email address.";
    // sleep(5);
    // header('Location: ../Login.php');
}
else{
    $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $email);

    // Execute the SQL statement
    if ($stmt->execute() === TRUE) {
        echo "New user created successfully";
        $query = "SELECT id FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        $_SESSION['user_id'] = $result;
        $_SESSION['username'] = $username;
        header('Location: ../Index.php');
        
    } else {
        echo "Error: " . $stmt->error;
    }
}

?>
