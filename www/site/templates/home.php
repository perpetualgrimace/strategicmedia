<? snippet('header') ?>

<? snippet('body-open') ?>
	<? snippet('hero') ?>

	<? snippet('main-open') ?>
		<?= $page->blocks()->toBlocks() ?>
	<? snippet('main-close') ?>
<? snippet('body-close') ?>

<script>
	var video = document.querySelector('.hero-video');

	if (window.matchMedia('(prefers-reduced-motion)').matches) {
	 video.removeAttribute('autoplay');
	 video.pause();
	}
</script>

<? snippet('footer') ?>