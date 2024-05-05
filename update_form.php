<!DOCTYPE html>
<html>
<head>
    <title>Update Feedback</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/general.css" />
</head>
<body>
    <div class="container">
        <h2>Update Customer Feedback</h2>
        <?php
        $conn = new mysqli("localhost", "root", "", "wejha");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get the feedback_id from URL
        $feedback_id = isset($_GET['feedback_id']) ? intval($_GET['feedback_id']) : 0;

        // Fetch the existing feedback
        $sql = "SELECT * FROM feedback WHERE feedback_id = $feedback_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Display the form with existing values
            echo "<form action='process_update.php' method='post'>
                    <input type='hidden' name='feedback_id' value='" . $row['feedback_id'] . "'>
                    <label>Name:</label>
                    <input type='text' name='name' value='" . htmlspecialchars($row['name']) . "' required><br>
                    <label>Email:</label>
                    <input type='email' name='email' value='" . htmlspecialchars($row['email']) . "' required><br>
                    <label>Experience:</label>
                    <select name='experience'>
                        <option value='Excellent' " . ($row['experience'] == 'Excellent' ? 'selected' : '') . ">Excellent</option>
                        <option value='Good' " . ($row['experience'] == 'Good' ? 'selected' : '') . ">Good</option>
                        <option value='Fair' " . ($row['experience'] == 'Fair' ? 'selected' : '') . ">Fair</option>
                        <option value='Poor' " . ($row['experience'] == 'Poor' ? 'selected' : '') . ">Poor</option>
                    </select><br>
                    <label>Used Services:</label>
                    <input type='text' name='used_services' value='" . htmlspecialchars($row['used_services']) . "'><br>
                    <label>Additional Feedback:</label>
                    <textarea name='additional_feedback'>" . htmlspecialchars($row['additional_feedback']) . "</textarea><br>
                    <button type='submit'>Update Feedback</button>
                </form>";
        } else {
            echo "No feedback found to update.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
