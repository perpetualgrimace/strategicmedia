<? snippet('header') ?>

<? snippet('body-open') ?>
	<? snippet('hero') ?>

	<? snippet('main-open') ?>
		<? snippet('magazine-list') ?>
		<?= $page->blocks()->toBlocks() ?>
	<? snippet('main-close') ?>
<? snippet('body-close') ?>

<? snippet('footer') ?>