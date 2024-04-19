<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Your database connection logic here...
    $servername = "localhost";
    $username = "root"; // Your MySQL username
    $password_db = ""; // Your MySQL password
    $dbname = "register"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to fetch user data
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['first_name'] = $row['first_name'];

            // Redirect to dashboard or homepage
            header("Location: home.php");
            exit;
        } else {
            // Incorrect password
            echo "<script>alert('Incorrect password'); window.location.href = 'L-index.html';</script>";
            exit;
        }
    } else {
        // User not found
        echo "<script>alert('User not found'); window.location.href = 'L-index.html';</script>";
        exit;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}

// If login fails, reload the login page with popup
echo "<script>alert('Invalid credentials'); window.location.href = 'L-index.html';</script>";
exit;
?>
