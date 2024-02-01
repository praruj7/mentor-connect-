<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mydb';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$skills = $_POST['skills'];
$experience = $_POST['experience'];
$message = $_POST['message'];

// SQL statement to insert data into the database
$sql = "INSERT INTO mentors (fullname, email, phone, skills, experience, message) VALUES (?, ?, ?, ?, ?, ?)";

// Prepare the SQL statement
$stmt = $conn->prepare($sql);

// Bind parameters and execute the statement
$stmt->bind_param("ssssss", $fullName, $email, $phone, $skills, $experience, $message);

if ($stmt->execute()) {
    // Redirect to the dashboard page upon successful database update
    header("Location: dashboard.php");
    exit(); // Ensure no further PHP code is executed after the redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
