<section class="card-grid-container">
	
		
	<?php include('data.php') ?>

	<?php foreach ($cardData as $data) { ?>
		<card>
			<picture>
				<img src="<?=$data["image"]?>" alt="">
			</picture>

			<h3 class="heading"><?=$data["heading"]?></h3>
			<p class="body-copy"><?=$data["description"]?></p>
		</card>
	<?php } ?>



</section>