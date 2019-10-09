<?php
echo hash('ripemd160', 'Suraj');

function createfile($codeid, $username, $password, $email, $gender){
	$myfile = fopen(".txt", "w");
	return 0;

}
?> 

<?php
$dir    = '';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>