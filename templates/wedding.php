<?php
$sql = "SELECT * FROM gallery";
$arrGallery = runSelectSQL($sql);
$arrGallery = $arrGallery[0];
?>


<section id="weddingService">
	<div class="wedding container">
		    <div>
				 <img src="assets/<?=$arrPageData[0]["strPhoto1"]?>">
				 <h1><?=$arrPageData[0]["strTitle1"]?></h1>
				 <p><?=$arrPageData[0]["strParagraph1"]?></p>		
		    </div>
		    <div> 
		 	     <img src="assets/<?=$arrPageData[0]["strPhoto2"]?>">
				 <h1><?=$arrPageData[0]["strTitle2"]?></h1>
        		 <p><?=$arrPageData[0]["strParagraph2"]?></p>
	       </div>
    </div>
</section>
<section id="gallery">
	    <div class="galleryText container">
	        <h1>Gallery</h1>
	    </div>
	    <div class="photo container">
			     <?php
			           foreach($arrGallery as $gallery)
			     {						
		          ?>
		          <div>
		          	 <img src="assets/<?=$gallery?>" alt="wedding">
		          </div>
		        <?php

		         } 

		         ?>
	    </div>
</section>
