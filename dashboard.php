<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Connect - Our Mentors</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2A2A2A; /* Dark gray */
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
            color: #FF9900; /* Orange */
        }

        .student-profile-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #FF9900; /* Orange */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .student-profile-button:hover {
            background-color: #FF6600; /* Darker orange on hover */
        }

        .mentor-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .mentor-block {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px;
            max-width: 300px;
            text-align: center;
            transition: transform 0.2s;
        }

        .mentor-block:hover {
            transform: scale(1.05);
        }

        .mentor-name {
            font-size: 24px;
            margin: 10px 0;
        }

        .mentor-title {
            font-size: 16px;
            color: #777;
        }

        .mentor-description {
            font-size: 14px;
            margin-top: 10px;
        }

        /* Homepage navigation bar styles */
        .nav-container {
            background-color: #333; /* Dark gray */
            color: #fff;
            padding: 10px 0;
        }

        .nav-links {
            text-align: center;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Our Mentors</h1>
        <a class="student-profile-button" href="student_profile.html">Profile</a>
    </header>
    <div class="nav-container">
        <div class="nav-links">
            <a href="homepage.html">Home</a>
            <a href="who_we_serve.html">Who We Serve</a>
            <a href="become_a_mentor.html">Become a Mentor</a>
            <a href="resources.html">Resources</a>
            <a href="about.html">About</a>
            <a href="login.html">Login</a>
        </div>
    </div>
    <div class="mentor-container">
        <?php
            // Include a PHP script to fetch mentor data from the MySQL database
            include 'fetch_mentors.php';
        ?>
    </div>
</body>
</html>
