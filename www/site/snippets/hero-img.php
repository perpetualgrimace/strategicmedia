<?
	$img = $page->heroImg();
	if ($img != NULL):
?>

<div class="hero u-margin-top-off" style="background-image: url('<?= $img->url() ?>');">
  <!-- <img class="hero-img" src="<?//= $img->url() ?>" alt="" draggable="false"> -->
</div>

<? endif ?>
