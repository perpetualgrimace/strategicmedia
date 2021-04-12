<? 
	$carousel = $pages->find($block->carousel());
	$images = $carousel->carousel();
?>

<? if($images != NULL): ?>
	<div class="imgcarousel-block g-container">
		<h2 class="imgcarousel-heading u-center u-margin-bottom-md"><?= $carousel->headline() ?></h2>
		<ul class="imgcarousel-list g-col">
			<? foreach ($images->toStructure() as $img): ?>
				<li class="imgcarousel-item">
					<img class="imgcarousel-img" src="<?= $img->src() ?>" alt="<?= $img->alt() ?>" width="225" height="75" draggable="false" loading="lazy">
				</li>
			<? endforeach ?>
		</ul>
	</div>
<? endif ?>