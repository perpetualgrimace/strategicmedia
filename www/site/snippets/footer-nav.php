<?

// main menu items
$items = $pages->not('error')->not('pdfs')->notTemplate(['logogrid', 'testimonials']);

?>


<nav class="footer-nav">
  <ul class="footer-nav-list">
    
  <? foreach($items as $item): ?>

    <li class="footer-nav-item">
      <a class="footer-link footer-nav-link" <? e( ($item->isOpen()), 'aria-current' ) ?> href="<? e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
      <?= $item->title(); if($item->uri() == 'about'): ?>
        <span class="u-visually-hidden"> <?= $site->title() ?></span>
      <? endif; ?>
      </a>
    </li>

    <? endforeach ?>
  </ul>
</nav>