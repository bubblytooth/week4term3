<?php

include("function/dbqueries.php");

$sql = "DELETE FROM pages WHERE id='".$_GET["id"]."'";
runDeleteSQL($sql);

header("location: pages.php");

?>