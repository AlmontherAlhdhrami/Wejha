<?php

class User {
    public $name;
    public $gender;
    public $email;
    public $username;
    public $password;

    public function __construct($name, $gender, $email, $username, $password) {
        $this->name = $name;
        $this->gender = $gender;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
}
// Placeholder for storing user objects
$users = [];

// Function to display users
function displayUsers($users) {
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Gender</th><th>Email</th><th>Username</th></tr>";
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>{$user->name}</td>";
        echo "<td>{$user->gender}</td>";
        echo "<td>{$user->email}</td>";
        echo "<td>{$user->username}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a new user object from POST data
    $newUser = new User($_POST['name'], $_POST['gender'], $_POST['email'], $_POST['username'], $_POST['password']);
    // Assuming there's a mechanism to add to the $users array
    $users[] = $newUser;

    // Call display function
    displayUsers($users);
}



?>