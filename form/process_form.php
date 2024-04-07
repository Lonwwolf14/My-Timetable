<?php
if(isset($_POST['first_name'], $_POST['last_name'], $_POST['address'], $_POST['email'], $_POST['phone'], $_POST['gender'])) {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $conn = new mysqli('localhost', 'root', '', 'form');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO new (first_name, last_name, address, email, phone, gender) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $first_name, $last_name, $address, $email, $phone, $gender);
        $stmt->execute();
        echo "<strong>Welcome, $first_name!</strong>";
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required!";
}
?>
