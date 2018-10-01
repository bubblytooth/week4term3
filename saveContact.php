<?php
include("function/dbqueries.php");

$error = ($_POST["fullName"] && $_POST["email"] && $_POST["city"] && $_POST["message"])?false:true;


$sql = "INSERT INTO contacts (
		fullName, 
		email,
		city,
		message
		) 

	VALUES (
		'".$_POST["fullName"]."', 
		'".$_POST["email"]."',
		'".$_POST["city"]."',
		'".$_POST["message"]."'
		
	)";

	runInsertSQL($sql);
	header("location: index.php?nPagesID=7");
?>
