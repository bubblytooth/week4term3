<?php
include_once("function/dbqueries.php");
$arrPages = runSelectSQL("SELECT * FROM pages");
?>
	<div class="pages">
		<div class="pagesdeco">
			<h3>Main Page Layout</h3>
			<?php
			foreach($arrPages as $page)
			{
			?>
			<div><a class="editBtn" href="edit.php?id=<?=$page['id']?>">Edit</a><a class="deleteBtn" href="deletePage.php?id=<?=$page['id']?>">Delete</a><?=$page['strName']?>
		</div>
	<?php

	}

	?></div>

	
