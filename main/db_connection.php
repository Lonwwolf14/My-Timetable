<?php
$host = 'your_host'; // Hostname
$dbname = 'register'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

// Create a PDO instance
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Set PDO to throw exceptions on error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
