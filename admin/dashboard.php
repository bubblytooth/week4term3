<?php
include("partials/header.php");
$arrUsers = runSelectSQL("SELECT * FROM admin");
?>

<div id="welcomePage">
	    <h1>Welcome Back</h1>
		<div id="dashboard">
			<div>
				<a href="dashboard.php">Dashboard</a>
			</div>
			<div>
				<a href="pages.php">Pages</a>
			</div>
			<div>
				<a href="logout.php">Logout</a>
			</div>
		</div>
</div>