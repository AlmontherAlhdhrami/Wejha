<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }

        .main {
            width: 70%;
            margin: 2% auto;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 10px;
        }

        h2 {
            color: #333;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button, .btn {
            color: white;
            background-color: #007bff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover, .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container main">
        <h1>Caravan Admin Panel</h1>
        
        <!-- Form to Add a New Caravan -->
        <h2>Add New Caravan</h2>
        <form action="insert_caravan.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Enter caravan name">
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" placeholder="Enter location">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" placeholder="Enter price">
            </div>
            <button type="submit">Add Caravan</button>
        </form>

        <!-- Form to Delete a Caravan -->
        <h2>Delete Caravan</h2>
        <form action="delete_caravan.php" method="post">
            <div class="form-group">
                <label for="id">Caravan ID:</label>
                <input type="text" name="id" placeholder="Enter caravan ID">
            </div>
            <button type="submit">Delete Caravan</button>
        </form>

        <!-- Form to Update a Caravan -->
        <h2>Update Caravan</h2>
        <form action="update_caravan.php" method="post">
            <div class="form-group">
                <label for="id">Caravan ID:</label>
                <input type="text" name="id" placeholder="Enter caravan ID to update">
            </div>
            <div class="form-group">
                <label for="new_name">New Name:</label>
                <input type="text" name="new_name" placeholder="Enter new name">
            </div>
            <div class="form-group">
                <label for="new_location">New Location:</label>
                <input type="text" name="new_location" placeholder="Enter new location">
            </div>
            <div class="form-group">
                <label for="new_price">New Price:</label>
                <input type="text" name="new_price" placeholder="Enter new price">
            </div>
            <button type="submit">Update Caravan</button>
        </form>
    </div>
</body>
</html>
