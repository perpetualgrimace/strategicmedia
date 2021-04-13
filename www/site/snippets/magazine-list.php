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
	<ul class="tag-list">
		<? foreach ($categories as $tag): ?>
			<li class="tag-item">
				<a href="#<?= sanitize($tag->category()) ?>">
					<?= $tag->category() ?>
				</a>
			</li>
		<? endforeach ?>
	</ul>

	<div class="magazine-outer">
		<ul class="magazine-list">
			<? foreach($allMagazines as $magazine): ?>
				<li class="magazine-item" data-category="<?= matchCategories($categories, $magazine) ?>">
					<img class="magazine-img" src="<?= $magazine->url() ?>" alt="<?= $magazine->alt() ?>" draggable="false" loading="lazy" width="225" height="<?= $magazine->height() / 2 ?>">
				</li>
			<? endforeach ?>
		</ul>
		
	</div>
<? endif ?>