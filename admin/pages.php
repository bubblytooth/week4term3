<?php
include("partials/navagation.php");
include("partials/header.php");
?>
<section id="pages">
	<div id="pagelist">
		<h1>Add Page</h1>
		<a href="addPage.php" class="addPage">Add Page Here</a>
		<div id="addPage">
			<?php
				include("pageList.php");
			?>
		</div>
	</div>
</section>
