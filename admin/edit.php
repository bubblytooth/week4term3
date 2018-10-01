<?php
include("partials/header.php");
include("partials/navagation.php");
$pageID = (isset($_GET["nPagesID"])?$_GET["nPagesID"]:1);
$arrPages = runSelectSQL("SELECT * FROM pages WHERE id='".$pageID."'");
?>
<div id="editService">
	<h1>Edit Page</h1>
	<form method="post" enctype="multipart/form-data" action="updatePage.php?id=<?=$arrPages[0]['id']?>" onsubmit="return validateForm();">
		<label>Template:</label>
		<select name="nTemplatesID">
			<?php
			$arrAllTemplates = runSelectSQL("SELECT * FROM templates");
			foreach($arrAllTemplates as $template)
			{
				echo "<option value='".$template["id"]."'>".$template["strName"]."</option>";
			}
			?>
		</select><br/>

		<label class="requiredField">Title</label>
		<input type="text" class="requiredField" name="strTitle" value="<?=$arrPages[0]['strName']?>">

		<label>Main Title</label>
		<input type="text" name="strMainTitle" value="<?=$arrPages[0]['strTitle1']?>"/>

		<label>Paragraph</label>
		<textarea name="strParagraph"><?=$arrPages[0]['strParagraph1']?></textarea>

		<input type="submit" value="Save Changes">
		<a href="pages.php">Cancel</a>
	</form>
</div>
