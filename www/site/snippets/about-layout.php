<div class="g-container about">
	<div class="g-col g-9">
		<?= $page->text()->kt() ?>
	</div>
	<div class="g-col g-3">
		<?= $page->logos()->toBlocks() ?>
	</div>
</div>

<? if($page->team()->toStructure() != ''): ?>
	<div class="g-container team-block is-behind">
		<h2 class="about-bio-heading g-col u-left-center">
			<?= $page->teamHeading() ?>
		</h2>
		<ul class="g-col">
			<? foreach($page->team()->toStructure() as $member): ?>
				<? snippet('card', [
					'title' => $member->name(),
					'subhead' => $member->position(),
					'img' => $member->img(),
					'text' => $member->bio(),
				]) ?>
			<? endforeach ?>
		</ul>
	</div>
<? endif ?>