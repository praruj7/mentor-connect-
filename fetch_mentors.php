<?php
// Database configuration
$host = 'localhost';  // Replace with your database host
$username = 'root';   // Replace with your database username
$password = '';       // Replace with your database password
$database = 'mydb'; // Replace with your database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch mentor data from the "mentors" table
$sql = "SELECT * FROM mentors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="mentor-block">';
        echo '<div class="mentor-name">' . $row['fullname'] . '</div>';
        echo '<div class="mentor-title">' . $row['email'] . '</div>';
        echo '<div class="mentor-description">' . $row['skills'] . '</div>';
        echo '<div class="mentor-title">' . $row['experience'] . '</div>';
        echo '<div class="mentor-title">' . $row['message'] . '</div>';
        echo '</div>';
    }
} else {
    echo 'No mentors available.';
}

// Close the database connection
$conn->close();
?>
