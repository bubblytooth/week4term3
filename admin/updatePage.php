<?php
include_once("function/dbqueries.php");
runSQL("
	UPDATE
		pages
	SET
		nTemplatesID = '".$_POST["nTemplatesID"]."',
		strTitle1 = '".$_POST["strTitle1"]."',
		strParagraph1 = '".$_POST["strParagraph1"]."'
		WHERE id=".$_GET["id"]."");

header("location: pages.php");
?>