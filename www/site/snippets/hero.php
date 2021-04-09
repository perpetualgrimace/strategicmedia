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


<div class="hero-divider">
  <svg xmlns="http://www.w3.org/2000/svg" width="600" height="8" viewBox="0 0 600 8" preserveAspectRatio="none">
    <g fill="none" fill-rule="evenodd">
      <rect width="60" height="8" x="540" fill="#E9372D"/>
      <rect width="140" height="8" x="400" fill="#EB6122"/>
      <rect width="200" height="8" x="200" fill="#F28C20"/>
      <rect width="140" height="8" x="60" fill="#F7B517"/>
      <rect width="60" height="8" fill="#FEE200"/>
    </g>
  </svg>
</div>