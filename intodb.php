<?php
$postname= $_POST['post_name'];
$username1= $_POST['user_name'];
$userpost= $_POST['user_post'];
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

$sql = "INSERT INTO blogs(user_name, post_name, user_post)
VALUES ('$username1', '$postname', '$userpost')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>