<!DOCTYPE html>
<html>
<head>
    <title>Happy Customers</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/general.css" />
    <style>
        .feedback-item {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .feedback-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .btn-update {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
        }
        a{text-decoration:none;}
    </style>
</head>
<body>
   <?php  include("header.php");?>
   <br>
   <br>
    <div class="container">
        <h2>Customer Feedback</h2>
        <?php
        echo "<script> alert('Feedback recorded successfully!')</script>";

        // Database connection
        $conn = new mysqli("localhost", "root", "", "wejha");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT  feedback_id, name, email, experience, used_services, additional_feedback FROM feedback");

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='feedback-item'>
                        <img src='image\avtar.png' alt='Avatar'>
                        <p><strong>" . $row["name"] . "</strong></p>
                        <p>" . $row["additional_feedback"] . "</p>
                        <p>" . $row["experience"] . "</p>
                        <p>" . $row["used_services"] . "</p>


                        <a href='update_form.php?feedback_id=" . $row["feedback_id"] . "' class='btn-update'>Update</a>
                        <a href='delete_feedback.php?feedback_id=".$row["feedback_id"]."' class='btn-delete'>Delete</a>
                      </div>";
            }
        } else {
            echo "No feedback found.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
