<? if($categories != NULL): ?>
	<ul class="tag-list">
		<? foreach ($categories as $tag): ?>
			<li class="tag-item">
				<a class="tag-link" href="#<?= sanitize($tag->category()) ?>">
					<?= $tag->category() ?>
				</a>
			</li>
		<? endforeach ?>
	</ul>
<? endif ?>