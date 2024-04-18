<?php
// Establish database connection
$servername = "localhost"; // Assuming MySQL server is running on the same machine
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "register"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop through POST data to insert into the database
    foreach ($_POST as $key => $value) {
        // Check if the key starts with the day of the week (e.g., "monday_")
        if (strpos($key, 'monday_') === 0 || strpos($key, 'tuesday_') === 0 || strpos($key, 'wednesday_') === 0 || strpos($key, 'thursday_') === 0 || strpos($key, 'friday_') === 0) {
            // Extract day, time, and value from the key
            $parts = explode('_', $key);
            $day = $parts[0]; // Day of the week
            $time = $parts[1]; // Time (e.g., "9", "11", "1")
            $value = mysqli_real_escape_string($conn, $value); // Sanitize input to prevent SQL injection

            // Construct SQL query
            $sql = "INSERT INTO timetable (day, time, subject) VALUES ('$day', '$time', '$value')";

            // Execute query
            if ($conn->query($sql) === TRUE) {
                header("Location: mytt.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

// Close database connection
$conn->close();
?>
