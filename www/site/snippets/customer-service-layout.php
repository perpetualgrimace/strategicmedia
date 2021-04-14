<div class="customer-service g-container u-margin-top-lg content">
	<div class="g-col g-4 u-margin-bottom-lg">
		<?= $page->col1()->kt() ?>
	</div>
	<div class="g-col g-4 u-margin-bottom-lg">
		<?= $page->col2()->kt() ?>
	</div>
	<div class="g-col g-4 u-margin-bottom-lg">
		<?= $page->col3()->kt() ?>
	</div>

	<div class="g-col">
		<?= $page->text()->kt() ?>
	</div>
</div>

<? snippet('formbuilder'); ?>


<script>

	function toggleGiftFields(e) {
		var giftFields = Array.from(document.querySelectorAll('.ship-to'));

		giftFields.map(field => {
			field.classList.toggle('is-hidden');
		});
	}

	// on load
	document.addEventListener('DOMContentLoaded', function(event) {
		var checkbox = document.getElementById('gift');

		checkbox.addEventListener('change', toggleGiftFields);

		toggleGiftFields();
	});
</script>