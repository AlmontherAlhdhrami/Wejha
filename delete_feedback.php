<?php
$conn = new mysqli("localhost", "root", "", "wejha");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['feedback_id'];  // Get id from the URL

// SQL to delete a record
$sql = "DELETE FROM feedback WHERE feedback_id=$id";

echo "<script> alert('are you shower do you want delate product')</script>";
$result = mysqli_query($conn,$sql);

if ($result) {
    mysqli_close($conn);
    header("Location: happy_customers.php"); // Redirect to the feedback page
    exit();
} else {
    echo "Error deleting record";
}
  

$conn->close();

?>
