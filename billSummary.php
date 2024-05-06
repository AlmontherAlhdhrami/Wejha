<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo.jpg" type="image/icon type">
    <title>Bill Summary</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        #billDetails {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            margin: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .home-btn {
            text-decoration: none;
            background-color: #5cb85c;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .home-btn:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <h1>فاتورتك / Your Bill</h1>
    <div id="billDetails">
        <?php
        if (isset($_GET['id'])) {
            // Connect to database
            $conn = new mysqli("localhost", "root", "", "wejha");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // Prepare statement
            $stmt = $conn->prepare("SELECT * FROM reservations WHERE reservation_id = ?");
            $stmt->bind_param("i", $_GET['id']);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<p>Reservation ID: " . $row['reservation_id'] . "</p>";
                echo "<p>Phone: " . $row['phone_number'] . "</p>";
                echo "<p>Name: " . $row['full_name'] . "</p>";
                echo "<p>Booking Time: " . $row['booking_time'] . "</p>";
                echo "<p>Booking Date: " . $row['booking_date'] . "</p>";
                echo "<p>Days: " . $row['days'] . "</p>";
            } else {
                echo "<p>No reservation data found.</p>";
            }
            $stmt->close();
            $conn->close();
        } else {
            echo "<p>No reservation ID provided.</p>";
        }
        ?>
    </div>
    <a href="index.html" class="home-btn">Return to Home Page</a>
</body>
</html>
