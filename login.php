<?php
session_start();

if(!isset($_SESSION['usename']))
{
    if(isset($_POST['uname']) || isset($_POST['pass']))
    {
          $username = $_POST['uname'];
          $password = $_POST['pass'];
          $_SESSION['usename'] = $username;
          $_SESSION['passw'] = $password;
       echo "<script> location.href = 'welcome.php' </script>";
    }
}
else
{
	echo "<script> location.href = 'welcome.php' </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form method="post" action=" ">
		UserName:<input type="text" name="uname"><br><br>
		Password:<input type="Password" name="pass"><br><br>
		<input type="submit" name="Login" value="Login">
		

	</form>

</body>
</html>