<? if($block->img()->toFile()): ?>
	<div class="bgimg-block">
		<img class="bgimg-img" src="<?= $block->img()->toFile()->url() ?>" alt="">
	</div>
<? endif ?>