<? if($block->img()->toFile()): ?>
	<figure class="textimg-block g-container <?= $block->orientation() ?>-orientation">
		<figcaption class="textimg-caption g-col g-6 u-font-md">
			<? if($block->heading() != ""): ?>
				<h2 class="textimg-heading u-margin-bottom"><?= $block->heading() ?></h2>
			<? endif ?>

			<? e($block->text()->kt(), $block->text(), 'no text') ?>
		</figcaption>

		<div class="textimg-img g-col g-6">
			<?= $block->img()->toFile() ?>
		</div>
	</figure>
<? endif ?>