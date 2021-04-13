<? 
	$logogrid = $pages->find($block->logogrid());
	$images = $logogrid->logogrid();
?>

<? if($images != NULL): ?>
	<div class="logogrid-block g-container">
		<h2 class="logogrid-heading u-center u-margin-bottom-md"><?= $logogrid->headline() ?></h2>
		<ul class="logogrid-list g-col">
			<? foreach ($images->toStructure() as $img): ?>
				<li class="logogrid-item">
					<img class="logogrid-img" src="<?= $img->src() ?>" alt="<?= $img->alt() ?>" width="225" height="75" draggable="false" loading="lazy">
				</li>
			<? endforeach ?>
		</ul>
	</div>
<? endif ?>