<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "wejha");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (name, email, experience, used_services, additional_feedback) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $experience, $used_services, $additional_feedback);

// Set parameters and execute
// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$experience = $_POST['experience'];
$used_services = isset($_POST['services']) ? implode(',', $_POST['services']) : ''; // Checks if services is set, then implodes
$additional_feedback = $_POST['additional_feedback'];
$stmt->execute();

header("Location: happy_customers.php");

$stmt->close();
$conn->close();
?>
