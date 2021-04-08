<?
  if($page->headline() != '') { $headline = $page->headline(); }
  else { $headline = $page->title(); }
?>

<header class="hero <? if ($page->isHomePage()) { echo 'home-hero '; } ?>u-fullwidth dark-theme" role="banner">

  <div class="hero-inner g-container u-left-center">
    <h1 class="hero-headline g-col">
      <?= $headline ?>

      <? if ($page->subhead() != ''): ?>
        <span class="hero-subhead subhead u-font-lg u-margin-top"><?= $page->subhead() ?></span>
      <? endif ?>
    </h1>

  </div>

  <? if ($page->heroImg()) { 
    snippet('hero-img');
  } ?>

</header>