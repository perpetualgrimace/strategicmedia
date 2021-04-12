<? 
	$testimonials = $pages->find($block->testimonials());
?>

<? if($testimonials != NULL): ?>
	<div class="testimonials-block g-container">
		<h2><?= $testimonials->headline() ?></h2>
		<ul class="imgcarousel-list g-col">
			<? foreach ($testimonials->testimonials()->toStructure() as $quote): ?>
				<li>
					<figure>
						<blockquote>
							<?= $quote->quote() ?>
						</blockquote>

						<figcaption>
							&mdash; <?= $quote->quotee() ?>
							<cite><?= $quote->position() ?>, <?= $quote->company() ?></cite>
						</figcaption>
					</figure>
				</li>
			<? endforeach ?>
		</ul>
	</div>
<? endif ?>