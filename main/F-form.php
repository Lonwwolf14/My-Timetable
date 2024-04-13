<?php
session_start();

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

    // Prepare SQL statement to check if email already exists using prepared statements
    $check_sql = "SELECT email FROM users WHERE email=?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // Email already exists, redirect to login page
        header("Location: L-index.html");
        exit;
    }

    // Prepare SQL statement to insert data into the database using prepared statements
    $insert_sql = "INSERT INTO users (first_name, last_name, address, email, phone, password, gender)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("sssssss", $first_name, $last_name, $address, $email, $phone, $hashed_password, $gender);

    if ($insert_stmt->execute()) {
        // Registration successful, set a flag to display success message
        $_SESSION['registration_success'] = true;
        // Save the first name in a session variable
        $_SESSION['first_name'] = $first_name;

        // Close database connection
        $insert_stmt->close();
        $conn->close();

        // Redirect to login page
        header("Location: L-index.html");
        exit;
    } else {
        echo "Error: " . $insert_stmt->error;
    }
} else {
    // If the form is not submitted, redirect to the registration form
    header("Location: F-index.html");
    exit;
}
?>
