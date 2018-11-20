<?php

	session_start();
	if(isset($_POST["account"])&&isset($_POST["pw"]))
	{
		unset($_SESSION["account"]);
		if($_POST["pw"]=='umsi'){
			$_SESSION["account"]=$_POST["account"];
			$_SESSION["success"]="Logged In";
			echo "<script type='text/javascript'> document.location = 'app.php'; </script>";
			return;
		}
		else
		{
			$_SESSION["error"]="Incorrect password";
			echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
			return;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<p>Please Log In</p>
		<?php
			if(isset($_SESSION["error"]))
			{
				echo('<p style="red">'.$_SESSION["error"]."</p>\n");
				unset($_SESSION["error"]);
			}

			if(isset($_SESSION["success"]))
			{
				echo('<p style="green">'.$_SESSION["success"]."</p>\n");
				unset($_SESSION["success"]);
			}
		?>

		<form method="post">
			<p>Account : <input type="text" name="account" id="account" size="40"></p>
			<p>Password : <input type="text" name="pw" id="pw" ></p>

			<p><input type="submit" value="Log In"></p>
			<p><a href="app.php">Cancel</a></p>
		</form>
</body>
</html>