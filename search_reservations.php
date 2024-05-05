<!DOCTYPE html>
<html>
<head>
    <title>Search Reservations</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        .table th, .table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Search Reservations</h2>
        <form action="search_reservations.php" method="get">
            <div class="form-group">
                <label for="searchTerm">Enter Customer Name:</label>
                <input type="text" class="form-control" id="searchTerm" name="searchTerm" placeholder="Search by customer name">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['searchTerm'])) {
            $conn = new mysqli("localhost", "root", "", "wejha");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $searchTerm = $_GET['searchTerm'];
            $stmt = $conn->prepare("SELECT * FROM reservations WHERE full_name LIKE ?");
            $searchTerm = "%$searchTerm%";
            $stmt->bind_param("s", $searchTerm);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<table class='table'>
                        <thead>
                            <tr>
                                <th>Reservation ID</th>
                                <th>Phone Number</th>
                                <th>Full Name</th>
                                <th>Booking Time</th>
                                <th>Booking Date</th>
                                <th>Days</th>
                            </tr>
                        </thead>
                        <tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["reservation_id"] . "</td>
                            <td>" . $row["phone_number"] . "</td>
                            <td>" . htmlspecialchars($row["full_name"]) . "</td>
                            <td>" . $row["booking_time"] . "</td>
                            <td>" . $row["booking_date"] . "</td>
                            <td>" . $row["days"] . "</td>
                          </tr>";
                }
                echo "</tbody>
                    </table>";
            } else {
                echo "<p>No results found for your search.</p>";
            }
            $stmt->close();
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
