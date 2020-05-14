<?php
session_start();
if(isset($_SESSION['usename']))
{
echo $_SESSION['usename']."<br/>". $_SESSION['passw'];
}
else
{
	echo "<script> location.href = 'login.php' </script>";
}
if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	echo "<script> location.href = 'login.php' </script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<h3>Success</h3>
	<form method="post" action="">
		<input type="submit" name="logout" value="Logout">
	</form>

</body>
</html>