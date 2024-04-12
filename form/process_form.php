<?php
// Start a PHP session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Validate phone number format
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "Invalid phone number format";
        exit;
    }

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

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

    // Prepare SQL statement to check if email already exists
    $check_sql = "SELECT email FROM users WHERE email='$email'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // Email already exists, redirect to login page
        header("Location: login.html");
        exit;
    }

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO users (first_name, last_name, address, email, phone, password, gender)
            VALUES ('$first_name', '$last_name', '$address', '$email', '$phone', '$hashed_password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to home page

        // Save the first name in a session variable
        $_SESSION['first_name'] = $first_name;

        // Redirect to the home page
        header("http://localhost/My-Timetable/home/index.html");
        exit;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    // If the form is not submitted, redirect to the registration form
    header("Location: registration_form.html");
    exit;
}
?>
