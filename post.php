<?php
$username1= $_POST['name'];
$password1= $_POST['password'];
$gender1= $_POST['gender'];
$email1= $_POST['email'];
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
VALUES ('$username1', '$email1', '$password1', '$gender1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="http://localhost/blog_engine/" alt="home">Home</a>