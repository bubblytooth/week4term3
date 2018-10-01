<?php
include("partials/header.php");
?>

<div id="container" >
		<?php
			if ($_GET["error"])
			{
				echo "<div class='loginError'>I am sorry, but you have entered a wrong password!</div>";
			}
		?>
	<div id="loginForm">
		<form method="post" action="login.php">
			<input type="text" name="strUserName" placeholder="Enter UserName"><br>
			<input type="password" name="strPassword" placeholder="Enter Password"><br>
			<input type="submit" name="Login" id="btn">
		</form>
	</div>
</div>
<!---container-->

