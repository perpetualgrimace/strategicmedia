<? function ktStrip($string) {
  return str::substr(kirbytext($string->value), 3, -4);
} ?>

<p class="footer-copyright-text u-font-sm">
  <?= ktStrip($site->copyright()->kt()) ?>
</p>

<p class="footer-social">
	<a class="footer-social-link" href="https://www.linkedin.com/company/strategic-media-llc/" aria-label="follow <?= $site->title() ?> on LinkedIn">
		<? snippet('linkedin.svg') ?>
	</a>
</p>