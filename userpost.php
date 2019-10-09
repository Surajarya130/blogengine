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

$sql = "INSERT INTO blogs (user_post, user_name, post_name, user_id)
VALUES ('Hi Everyone Saurabh here', 'Saurabh', 'sample post', '')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>