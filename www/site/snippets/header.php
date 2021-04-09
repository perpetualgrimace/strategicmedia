<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <meta name="keywords" content="<?= $site->keywords() ?>">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600&display=swap" rel="stylesheet">

  <title>
  	<? if (!$page->isHomePage()) {
  		echo $page->title()->html() . ' | ';
  	} ?>
		<?= $site->title()->html() ?>
	</title>
	
  <?= liveCSS('assets/builds/bundle.css') ?>
</head>


<? snippet('header-nav') ?>