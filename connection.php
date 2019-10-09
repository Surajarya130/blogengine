<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_engine";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signup (user_name, user_email, user_password, gender)
VALUES ('Suraj', 'suraj@gmail.com', '123456', 'Male')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>