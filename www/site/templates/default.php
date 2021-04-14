<? snippet('header') ?>

<? snippet('body-open') ?>
	<? snippet('hero') ?>

	<? snippet('main-open') ?>
		<div class="g-container u-margin-top-lg u-margin-bottom-lg">
			<div class="g-col">
				<?= $page->text()->kt() ?>
			</div>
		</div>
	<? snippet('main-close') ?>
<? snippet('body-close') ?>

<? snippet('footer') ?>
