<?php
// Retrieve form data
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$conn = new mysqli('localhost', 'root', '', 'form');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO form_details (first_name, last_name, address, email, phone, gender) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $first_name, $last_name, $address, $email, $phone, $gender);
    $stmt->execute();
    echo "Registration successful....";
    $stmt->close();
    $conn->close();
}
?>