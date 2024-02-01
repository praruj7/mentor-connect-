<?php
// Database connection parameters
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'mydb';

// Establish a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve user input
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password (you should use more secure methods)
$hashedPassword = md5($password);

// Insert user data into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("Location: login.html"); // Redirect to sign-in page
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
}
?>