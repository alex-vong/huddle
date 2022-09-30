<section class="card-grid-container">
	
		
	<?php include('data.php') ?>

	<?php foreach ($cardData as $data) { ?>
		<card>
			<picture>
				<img src="<?=$data["image"]?>" alt="">
			</picture>

			<div class="card-text">
				<h3 class="heading"><?=$data["heading"]?></h3>
				<p class="body-copy"><?=$data["description"]?>
			</div>	
			</p>
		</card>
	<?php } ?>

</section>