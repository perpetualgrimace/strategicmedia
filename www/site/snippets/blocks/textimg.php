<? if($img = $block->img()->toFile()): ?>
	<div class="g-container">
		<div class="g-col g-6">
			<?= $block->text()->kt() || "no text entered" ?>
		</div>
		<div class="g-col g-6">
			<?= $img->image() ?>
		</div>
	</div>
<? endif ?>