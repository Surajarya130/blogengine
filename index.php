<!doctype html>
<html>
<title>Blog Engine</title>
<head>
<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<div class="heading">
  <h1>Blog Engine</h1>
</div>
<div id="login">
<form class="login_form" action="login.php" method="post">
Email <br>
<input type="email" name="email"><br>
Password: <br>
<input type="password" name="password"><br>
<input type="text" name="formtype" value="login" hidden>
<button class="login_button" type="submit" name="submit">Login</button>
</form>
</div>
<div id="signup">
<form class="signup_form" action="http://localhost/blog_engine/post.php" method="post">
Name:<br>
<input type="text" name="name"></input><br>
Password:<br>
<input type="password" name="password" value="1234"></input><br>
Email:<br>

<input type="email" name="email" value="abcd@gmail.com"></input><br>
Gender:<br>
<input type="radio" name="gender" value="male" checked> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<input type="text" name="formtype" value="signup" hidden>
<input type="radio" name="gender" value="other"> Other <br>
<button class="signup_button" type="submit">SignUp</button>
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="main">
<h1>List of all posts</h1>
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

$sql = "SELECT * from blogs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  
  while($row = $result->fetch_assoc()) {
	  
	  
?>
<div id="user_posts">


<div class="post_title">
<h2 class="write">Posts Title: <?php echo $row["post_name"];   
?></h2>
</div>
<div class="writer_name"><h2 class="write">User Name:<?php echo $row["user_name"];   
?></h2>
</div>
<div class="article"><h2 class="write">Blog:<hr></h2>
<p><?php echo $row["user_post"];   
?></p></div>
</div>
<div id="post_date">
<h3>Date of Post<br><?php echo $row["date"];   
?></h3>
</div>
</div>
</body>
</html>
<?php
 }
} else {
    echo "0 results";	
}
$conn->close();
?>
