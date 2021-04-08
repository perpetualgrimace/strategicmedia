<?
	$video = $page->heroVideo();
	$img = $page->heroImg();
	if ($page->isHomePage() && $video != NULL):
?>

	<video class="hero-video" playsinline autoplay muted loop poster="<?= image($img)->url() ?>">
		<? foreach($page->videos()->filterBy('filename', "*=", $video) as $video) { ?>
		  <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
	  <? } ?>
	</video>

<? elseif ($img != NULL): ?>

	<div class="hero-img">
	  <img class="hero-img" src="<?= $img->url() ?>" alt="" draggable="false">
	</div>

<? endif ?>
