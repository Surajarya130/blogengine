<?php
var_dump($_POST);
if($_POST[formtype]){
	
}
$username= $_POST['name'];
$password= $_POST['password'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$codeid=hash('ripemd160', $email);
//echo $codeid;
function createfile($codeid, $username, $password, $email, $gender){
	$myfile = fopen($codeid.".txt", "w");
    $ab= $username."+".$password."+".$email."+".$gender;
	fwrite($myfile, $ab);
	fclose($myfile);
	return 0;

}
$dir    = '.';
$files1 = scandir($dir);
$check =in_array ( $codeid.".txt", $files1);
//echo $check;
if ($check==1)
{
	echo "Already used email";	
}else
{
	createfile($codeid, $username, $password, $email, $gender);
    header("Location: http://localhost/blog_engine/"); 
}


?>

