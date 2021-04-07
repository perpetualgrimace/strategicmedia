  <?= js('assets/builds/bundle.js') ?>

	  <ul><? foreach ($pages->not('home')->not('error') as $item): ?>
	  	<li>
	  		<a href="<?= $item->slug() ?>">
	  			<?= $item->title()->html() ?>
	  		</a>
	  	</li>
	  <? endforeach ?></ul>

  </body>
</html>
