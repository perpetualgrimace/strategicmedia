<div class="header-nav<? if($page->heroImg() != NULL && $page->heroImg() != '') { echo ' dark-theme is-transparent'; } ?>">
	<nav class="header-nav-inner g-container">

		<a class="header-nav-logo" href="<?= $site->url() ?>">
			<img class="header-nav-logo-img" src="assets/images/strategic-media-icon.png" width="39" height="47" draggable="false" /> <span class="header-nav-logo-text subhead">Strategic Media <span class="header-nav-llc">LLC</span></span>
		</a>

		<ul class="header-nav-list"><? foreach ($site->children()->listed()->not('home') as $item): ?>
			<li class="header-nav-item">
				<a class="header-nav-link u-font-sm" href="<?= $item->slug() ?>">
					<?= $item->title()->html() ?>
				</a>
			</li>
		<? endforeach ?></ul>
	</nav>
</div>