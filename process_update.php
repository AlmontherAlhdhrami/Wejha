<?php
$conn = new mysqli("localhost", "root", "", "wejha");


// Collect all the input data
$feedback_id = $_POST['feedback_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$experience = $_POST['experience'];
$used_services = $_POST['used_services'];
$additional_feedback = $_POST['additional_feedback'];

// Prepare an SQL statement to update data
$sql = "UPDATE feedback SET 
            name = ?, 
            email = ?, 
            experience = ?, 
            used_services = ?, 
            additional_feedback = ?
        WHERE feedback_id= ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $name, $email, $experience, $used_services, $additional_feedback, $feedback_id);

if ($stmt->execute()) {
    echo "Feedback updated successfully.";
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt->close();
$conn->close();

// Redirect back to the feedback page
header("Location: happy_customers.php");
exit();
?>
