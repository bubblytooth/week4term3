<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Royal Zoute Golf Course</title>
	<link rel="stylesheet" href="css/site.css">
	<link href="https://fonts.googleapis.com/css?family=Lusitana|Mrs+Saint+Delafield" rel="stylesheet">
</head>
<body>
<header>
	<div class="phone container">
		<img src="assets/phone.png" alt="phone icon">
		<p>555-555-5555</p>
	</div>
</header>
<section>
	    <div class="logo container">
	    	<img src="assets/logo.png" alt="company logo">
	    </div>
</section>
<section class="container">
	        <label class="hamburger" for="toggle">&#9776;</label>
    		<input type="checkbox" id="toggle"/>
     <nav>
    	<ul id="nav">
    		<?php
				$arrPages = runSelectSQL('SELECT * FROM pages LIMIT 6');
				foreach($arrPages as $page){
					$active = ($pageID==$page['id'])?'active':'';
			             ?>
					<li><a href="index.php?nPagesID=<?=$page['id']?>" class="<?=$active?>"><?=$page['strName']?></a></li>
            <?php
	           }
            ?>
		</ul>
	</nav>

</section>