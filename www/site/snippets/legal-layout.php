<div class="content g-container u-margin-top-lg u-margin-bottom-lg">
	<div class="g-col">
		<? if($page->updated() != ''): ?>
			<p class="subhead">
				<span class="heading">Last updated</span> on <?= $page->updated()->toDate('M d, Y') ?>
			</p>
		<? endif ?>

		<?= $page->text()->kt() ?>
	</div>
</div>

<div class="legal content g-container u-margin-top-lg u-margin-bottom-lg">
	<div class="g-col">
		<?= $page->legal()->kt() ?>
	</div>
</div>