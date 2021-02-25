<!DOCTYPE html>
<html>
<head>
	<title>Password</title>
</head>
<body>
<p>
	<h1>ENCODE PASSWORD</h1>

	<form action="" method="post">
	<p>password : <input type="text" name="password"> <input type="submit" name="cek" value="Cek"></p>
	</form> 

<?php
if (isset($_POST['cek']))
{
$passwords = $_POST['password']; 
//Enkripsi Password
$en = $cipher->encrypt($passwords, $key);
		 //Penutup
echo "<p>password encode : <b>".$en ."</b></p>";
// echo $key."<br>";
// echo $salt1."<br>";
// echo $salt2."<br>";
// echo $hash_password;
}

?>
</p>
<p>
	<h1>DECODE PASSWORD</h1>

	<form action="" method="post">
	<p>password : <input style="width:800px;"" type="text" name="password"> <input type="submit" name="submit" value="Cek"></p>
	</form> 

<?php
if (isset($_POST['submit']))
{
$passwords = $_POST['password']; 
//Enkripsi Password
$de = $cipher->decrypt($passwords, $key);
		 //Penutup
echo "<p>password decode : <b>".$de ."</b></p>";
// echo $key."<br>";
// echo $salt1."<br>";
// echo $salt2."<br>";
// echo $hash_password;
}

?>
</p>
</body>
</html>

