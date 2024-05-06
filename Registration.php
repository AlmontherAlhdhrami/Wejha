<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "wejha");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any expected POST data is missing
    if (empty($_POST['phone']) || empty($_POST['Name']) || empty($_POST['time']) || empty($_POST['date']) || empty($_POST['days'])) {
        die("All fields are required.");
    }

    // Sanitize and set parameters
    $phone_number = htmlspecialchars($_POST['phone']);
    $full_name = htmlspecialchars($_POST['Name']);
    $booking_time = htmlspecialchars($_POST['time']);
    $booking_date = htmlspecialchars($_POST['date']);
    $days = (int)$_POST['days']; // Cast to integer to ensure the correct type

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO reservations (phone_number, full_name, booking_time, booking_date, days) VALUES (?, ?, ?, ?, ?)");
    if (false === $stmt) {
        die('MySQL prepare error: ' . $conn->error);
    }

    $bind = $stmt->bind_param("ssssi", $phone_number, $full_name, $booking_time, $booking_date, $days);
    if (false === $bind) {
        die('Bind param error: ' . $stmt->error);
    }

    // Execute
    $exec = $stmt->execute();
    if (false === $exec) {
        die('Execute error: ' . $stmt->error);
    }
// Execute
if ($stmt->execute()) {
    // Get the ID of the newly created reservation record
    $last_id = $conn->insert_id;
    header("Location: billSummary.php?id=" . $last_id); // Redirect to bill summary page with the last inserted ID
} else {
    echo "Error: " . $stmt->error;
}

    // Close statement
    $stmt->close();
} else {
    echo "No POST data received.";
}

// Close connection
$conn->close();
?>
