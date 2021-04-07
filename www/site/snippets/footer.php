  <?= js('assets/builds/bundle.js') ?>

  	<nav>
		  <ul><? foreach ($pages->not('home')->not('error') as $item): ?>
		  	<li>
		  		<a href="<?= $item->slug() ?>">
		  			<?= $item->title()->html() ?>
		  		</a>
		  	</li>
		  <? endforeach ?></ul>
	  </nav>

  </body>
</html>
