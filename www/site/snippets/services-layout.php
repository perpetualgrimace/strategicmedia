<div class="g-container u-margin-top-lg u-margin-bottom-lg">
	<div class="g-col g-12">
		<?= $page->text()->kt() ?>
	</div>
</div>


<!-- real heading -->
<? if($page->servicesHeading() != ''): ?>
	<h2 class="u-visually-hidden"><?= $page->servicesHeading() ?></h2>
<? endif ?>

<ul class="services service-list g-container block is-behind u-center">

	<!-- "heading" -->
	<? if($page->servicesHeading() != ''): ?>
		<li class="services-heading heading u-font-xl g-col u-margin-bottom-md" aria-hidden role="presentation">
			<?= $page->servicesHeading() ?>
		</li>
	<? endif ?>

	<? if($page->services()->toStructure() != ''): ?>
		<? foreach($page->services()->toStructure() as $service): ?>
			<li class="service-item g-col g-4">
				<span class="service-icon u-margin-bottom-md">
					<? snippet('icons/' . $service->icon() . '.svg') ?>
				</span>

				<span class="service-title heading u-font-sm">
					<?= $service->title() ?>
				</span>

				<? snippet('divider') ?>
			</li>
		<? endforeach ?>
	<? endif ?>
</ul>
