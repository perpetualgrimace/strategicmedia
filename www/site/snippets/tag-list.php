<? if($categories != NULL): ?>
	<ul class="tag-list">
		<? foreach ($categories as $tag): ?>
			<li class="tag-item">
				<a class="tag-link heading u-font-sm" href="#<?= sanitize($tag->category()) ?>">
					<?= $tag->category() ?>
				</a>
			</li>
		<? endforeach ?>
	</ul>
<? endif ?>