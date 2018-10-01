<?php
include("function/dbqueries.php");

$sql = "INSERT INTO pages (
		nTemplatesID,
		strTitle1,
		strParagraph1
	
		) 

	VALUES (
		'".$_POST["nTemplatesID"]."',
		'".$_POST["strTitle1"]."', 
		'".$_POST["strParagraph1"]."'
		
	)";

	runInsertSQL($sql);
	header("location: pages.php");
?>
