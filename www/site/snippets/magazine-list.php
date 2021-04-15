<?
	function sanitize($string) {
	  return preg_replace('/\-+/', '-', strtolower( preg_replace( '/[^a-z0-9]/i', '-', $string )));
	}

	function matchCategories($categories, $currMagazine) {
		$matches = "";
		
		foreach($categories as $category) { 
			foreach($category->magazines() as $stack) { 
				foreach($stack as $magazine) {
					if($magazine == $currMagazine->filename()) {
						$matches .= sanitize($category->category()) . ' ';
					}
				}
			}
		}

		return substr($matches, 0, -1);
	}

	$categories = $page->categories()->toStructure();
	$allMagazines = $page->images()->not(image($page->heroImg()))->shuffle();
?>

<? if($categories != NULL): ?>
	<? snippet('tag-list', ['categories' => $categories]) ?>

	<ul class="magazine-list">
		<? foreach($allMagazines as $magazine): ?>
			<li class="magazine-item is-hidden" data-category="<?= matchCategories($categories, $magazine) ?>">
				<img class="magazine-img" src="<?= $magazine->url() ?>" alt="<?= $magazine->alt() ?>" draggable="false" loading="lazy" width="225" height="<?= $magazine->height() / 2 ?>">
			</li>
		<? endforeach ?>
	</ul>
<? endif ?>


<script>

	function filterMags(category) {

		// reset all
		var allTags = Array.from(document.querySelectorAll('.tag-link'));
		allTags.map(a => {
			a.className = 'tag-link heading u-font-sm';
		});

		var allMagazines = Array.from(document.querySelectorAll('.magazine-item'));
		allMagazines.map(li => {
			li.className = 'magazine-item is-hidden';

			setTimeout(function() {
				li.style.display = 'none';
			}, 300);
		});

		// toggle on
		var currTag = document.querySelector('.tag-link[href*=' + category);
		currTag.className = 'tag-link is-selected heading u-font-sm';

		var matches = Array.from(document.querySelectorAll('.magazine-item[data-category*=' + category));
		matches.map(li => {
			li.className = 'magazine-item';

			setTimeout(function() {
				li.style.display = 'block';
			}, 300);
		});
	}

	// on load
	document.addEventListener('DOMContentLoaded', function() {
    var category = 'all';

    if (location.hash) {
    	category = location.hash.replace('#', '');
    }

    filterMags(category);
	});

	// on hash change
	window.addEventListener('hashchange', function() {
		category = location.hash.replace('#', '');

		filterMags(category);
	});
</script>