<? if($block->img()->toFile()): ?>
	<div class="bgimg-block is-behind">
		<img class="bgimg-img" src="<?= $block->img()->toFile()->url() ?>" alt="">
	</div>
<? endif ?>