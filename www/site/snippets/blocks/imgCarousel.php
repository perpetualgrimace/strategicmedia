<? 
	$carousel = $pages->find($block->carousel());
	$images = $carousel->carousel();
?>

<? if($images != NULL): ?>
	<div class="imgcarousel-block g-container">
		<h2><?= $carousel->headline() ?></h2>
		<ul class="imgcarousel-list g-col">
			<? foreach ($images->toStructure() as $img): ?>
				<li>
					<img src="<?= $img->src() ?>" alt="<?= $img->alt() ?>">
				</li>
			<? endforeach ?>
		</ul>
	</div>
<? endif ?>