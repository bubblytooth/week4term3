<?php
include("partials/header.php");
?>
<form method="post" action="savePage.php" enctype="multipart/form-data" onsubmit="return validateForm();" id="serviceForm">
			<h1>Add A Page</h1>
				<select name="nTemplatesID">
					<?php
					$arrAllTemplates = runSelectSQL("SELECT * FROM templates");
					foreach($arrAllTemplates as $template)
					{
						echo "<option value='".$template["id"]."'>".$template["strName"]."</option>";
					}
					?>		
				</select><br/>
			<label class="validForm">Title</label>
			<input type="text" placeholder="Page Name" name="strTitle" class="requiredField" value=""/>

			<label>Main Title</label>
			<input type="text" placeholder="strMainTitle" name="strMainTitle" value=""/>
			<label>Paragraph</label>
			<textarea name="strParagraph" value=""></textarea>
			<input type="submit" value="Add Page">
</form>
