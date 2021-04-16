<?
  if($page->headline() != '') { $headline = $page->headline(); }
  else { $headline = $page->title(); }

  $isHome = $page->isHomePage();
?>

<header class="hero <? if($isHome) { 
  echo 'home-hero '; 
} ?><? if($page->heroImg() != NULL && $page->heroImg() != '') { 
  echo ' dark-theme';
} ?>" role="banner">

  <div class="hero-inner g-container<? if($isHome) { echo ' u-left-center'; } ?>">
    <h1 class="hero-headline g-col<? if($isHome) { echo ' home-hero-headline'; } ?>">
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


<?= snippet('divider') ?>


