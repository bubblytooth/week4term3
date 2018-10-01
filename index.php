<?php
include_once("function/dbqueries.php");


$pageID = (isset($_GET["nPagesID"]))?$_GET["nPagesID"]:1;
include("partials/header.php");

$arrPageData = runSelectSQL("SELECT pages.*, templates.strTemplateFile FROM pages LEFT JOIN templates ON templates.id=pages.nTemplatesID WHERE pages.id='".$pageID."'");

$templateFileName = "templates/".$arrPageData[0]["strTemplateFile"];

if(file_exists($templateFileName))
   {
	 include($templateFileName);
   } 
     else 
   {
	 echo "I am sorry but this site is broken";
   }

?>
<?php
include("partials/footer.php");
?>
