<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>COOL APPLICATION</h1>
	<?php
		if(isset($_SESSION["success"]))
		{
			echo('<p style ="green">'.$_SESSION["success"]."</p>\n");
			unset($_SESSION["success"]);
		}

		if(!isset($_SESSION["account"]))
		{ ?>
			<p>Please<a href="login.php">Log In</a> to start.</p>
			<?php
		} else {
			?>
			<p>This is where a cool application would be.</p>
			<p>Please<a href="logout.php">Log out</a> when you are done.</p>
		<?php } ?>
</body>
</html>