<div class="content g-container u-margin-top-lg">
	<div class="g-col">
		<? if($page->updated() != ''): ?>
			<p class="subhead">
				<span class="heading">Last updated</span> on <?= $page->updated()->toDate('M d, Y') ?>
			</p>
		<? endif ?>

		<? if($page->legal() != '') {
			echo $page->text()->kt();
			snippet('toc', ['headlines' => $page->legal()->kt()->headlines('h2')]);
		} ?>
	</div>
</div>

<? if($page->legal() != ''): ?>
	<div class="legal content g-container u-margin-bottom-lg">
		<div class="g-col">
			<?= $page->legal()->kt()->anchorHeadlines('h2') ?>
		</div>
	</div>
<? endif ?>