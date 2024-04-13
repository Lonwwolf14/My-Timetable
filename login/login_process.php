<?php
// Start a PHP session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database
    $servername = "localhost";
    $username = "root"; // Your MySQL username
    $password_db = ""; // Your MySQL password
    $dbname = "register"; // Your database name
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement with prepared statement
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session and redirect to home page

            // Save the first name in a session variable
            $_SESSION['first_name'] = $row['first_name'];

            // Redirect to the home page
            header("http://127.0.0.1:5500/home/index.html");
            exit;
        } else {
            // Password is incorrect, redirect to login page with error message
            header("http://127.0.0.1:5500/login/login.html?error=incorrect_password");
            exit;
        }
    } else {
        // Email does not exist, redirect to login page with error message
        header("http://127.0.0.1:5500/login/login.html?error=email_not_found");
        exit;
    }

    // Close database connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted, redirect to the login page
    header("http://127.0.0.1:5500/login/login.html");
    exit;
}
?>
