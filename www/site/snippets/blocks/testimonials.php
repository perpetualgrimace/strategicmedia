<? 
	$testimonials = $pages->find($block->testimonials());
?>

<? if($testimonials != NULL): ?>
	<div class="testimonials-block g-container<? e($block->placement() == "behind", " is-behind", "") ?>">
		<h2 class="testimonials-heading u-margin-bottom-md u-center"><?= $testimonials->headline() ?></h2>
		<ul class="testimonials-list g-col">
			<? foreach ($testimonials->testimonials()->toStructure() as $quote): ?>
				<li class="testimonials-item">
					<figure class="testimonials-figure">
						<blockquote class="testimonials-blockquote u-font-sm u-margin-bottom-md">
							<?= $quote->quote() ?>
						</blockquote>

						<figcaption class="testimonials-caption u-right">
							<span class="testimonials-quotee heading">&mdash; <?= $quote->quotee() ?></span>
							<cite class="testimonials-cite u-font-xs"><?= $quote->position() ?>, <?= $quote->company() ?></cite>
						</figcaption>
					</figure>
				</li>
			<? endforeach ?>
		</ul>
	</div>
<? endif ?>