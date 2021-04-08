<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600&display=swap" rel="stylesheet">

  <title>
  	<? if (!$page->isHomePage()) {
  		echo $page->title()->html() . " | ";
  	} ?>
		<?= $site->title()->html() ?>
	</title>
  <?= liveCSS('assets/builds/bundle.css') ?>
</head>

<nav>
	<a class="logo" href="<?= $site->url() ?>">
		<img src="assets/images/strategic_media_inverted@2x.png" width="265" height="47" alt="<?= $site->title() ?>" />
	</a>
	<ul><? foreach ($site->children()->listed() as $item): ?>
		<li>
			<a href="<?= $item->slug() ?>">
				<?= $item->title()->html() ?>
			</a>
		</li>
	<? endforeach ?></ul>
</nav>

<body>
