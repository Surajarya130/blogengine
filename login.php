<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_engine";

// Create connection

if(isset($_POST['submit'])) {

    $user=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from signup where user_email='$user' and user_password='$password'";
    $con=mysqli_connect('localhost','root','','blog_engine');
    $run=mysqli_query($con,$query);

    if(mysqli_num_rows($run)>0) {
        echo "Login Successfull";
        $_SESSION['user']=$user;
    } 
else {
header("Location: http://localhost/blog_engine/");
    }


}
?>
<br>
<a href="http://localhost/blog_engine/dashboard.php">Go to dashboard for write an article</a>