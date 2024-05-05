<?php
class User {
    public $name;
    public $gender;
    public $email;
    public $username;

    public function __construct($name, $gender, $email, $username) {
        $this->name = $name;
        $this->gender = $gender;
        $this->email = $email;
        $this->username = $username;
    }
}

// Array of User objects
$users = [];
array_push($users, new User("Ahmed Alkhaldi", "M", "ahmedalk@example.com", "ahmed123"));
// Add more users as needed

function displayUsers($users) {
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Gender</th><th>Email</th><th>Username</th></tr>";
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($user->name) . "</td>";
        echo "<td>" . htmlspecialchars($user->gender) . "</td>";
        echo "<td>" . htmlspecialchars($user->email) . "</td>";
        echo "<td>" . htmlspecialchars($user->username) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Call the function to display users
displayUsers($users);
?>
