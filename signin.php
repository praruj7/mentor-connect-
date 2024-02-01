<?php
session_start();

$host = 'localhost';
$username = 'username';
$password = 'password';
$database = 'mydb';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password using a stronger hashing method (e.g., password_hash)
$hashedPassword = md5($password);

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    
    // Verify the hashed password
    if ($row['password'] === $hashedPassword) {
        $_SESSION['username'] = $username;
        header("Location: main_page.html");
    } else {
        echo "Login failed. Please check your username and password.";
    }
} else {
    echo "User not found. Please check your username.";
}

mysqli_close($conn);
?>

