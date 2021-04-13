<?
	$video = $page->heroVideo();
	$img = $page->heroImg();

	function stripVideoName($path) {
		$strippedExtension = str_replace(['.mp4', '.ogv', '.webm'], '', $path);
		$strippedPath = explode('/', $strippedExtension);
		return $strippedPath[1];
	}

	if ($page->isHomePage() && $video != NULL):
?>

	<video class="hero-video" playsinline autoplay muted loop poster="<?= image($img)->url() ?>">
		<? foreach($page->videos()->filterBy('filename', '*=', stripVideoName($video)) as $video): ?>
		  <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
	  <? endforeach ?>
	</video>

<? elseif (image($img) != NULL): ?>

	<div class="hero-img">
	  <img class="hero-img" src="<?= image($img)->url() ?>" alt="" draggable="false">
	</div>

<? endif ?>
