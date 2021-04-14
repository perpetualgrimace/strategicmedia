<?
	$title   = isset($title) ? $title : "Missing title";
	$subhead = isset($subhead) ? $subhead : "";
	$img     = isset($img) ? $img : "";
	$text    = isset($text) ? $text : "";

	$hLevel  = isset($hLevel) ? $hLevel : "3";
?>

<li class="card">
	<? if($img != ''): ?>
		<div class="card-img-wrapper">
			<img class="card-img" src="<?= $img ?>" alt="" width="<?= $img->width() ?>" height="<?= $img->height() ?>" loading="lazy">
		</div>
	<? endif ?>

	<div class="card-caption">
		<h<?= $hLevel ?> class="card-heading heading u-font-lg">
			<?= $title ?>
		</h<?= $hLevel ?>>

		<? if($subhead != ''): ?>
			<p class="card-subhead subhead u-font-sm">
				<?= $subhead ?>
			</p>
		<? endif ?>

		<? if($text != ''): ?>
			<p class="card-text u-font-sm">
				<?= $text ?>
			</p>
		<? endif ?>
	</div>
</li>