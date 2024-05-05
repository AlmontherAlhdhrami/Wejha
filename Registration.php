<?php
include 'conactiondata.php'; // Include your DB config file

$conn = connectDatabase(); // Connect to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST
    $phone = $_POST['phone'];
    $name = $_POST['Name'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $days = $_POST['days'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Reservations (phone_number, full_name, booking_time, booking_date, days) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $phone, $name, $time, $date, $days);
    if ($stmt->execute()) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
