<? snippet('header') ?>

<? snippet('body-open') ?>
	<? snippet('hero') ?>

	<? snippet('main-open') ?>
		<? snippet('clients-layout') ?>
		<?= $page->blocks()->toBlocks() ?>
	<? snippet('main-close') ?>
<? snippet('body-close') ?>

<? snippet('footer') ?>