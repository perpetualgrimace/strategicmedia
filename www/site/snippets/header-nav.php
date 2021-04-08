<div class="header-nav dark-theme">
	<nav class="header-nav-inner g-container">

		<a class="header-nav-logo" href="<?= $site->url() ?>">
			<img class="header-nav-logo-img" src="assets/images/strategic_media_inverted@2x.png" width="265" height="47" alt="<?= $site->title() ?>" />
		</a>

		<ul class="header-nav-list"><? foreach ($site->children()->listed() as $item): ?>
			<li class="header-nav-item">
				<a class="header-nav-link u-font-sm" href="<?= $item->slug() ?>">
					<?= $item->title()->html() ?>
				</a>
			</li>
		<? endforeach ?></ul>
	</nav>
</div>