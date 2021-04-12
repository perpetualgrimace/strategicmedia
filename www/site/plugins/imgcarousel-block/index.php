<?

Kirby::plugin('perpetualgrimace/imgcarousel', [
	'blueprints' => [
		'blocks/imgcarousel' => __DIR__ . '/blueprints/blocks/imgcarousel.yml'
	],
	'snippets' => [
		'blocks/imgcarousel' => __DIR__ . '/snippets/blocks/imgcarousel.php'
	],
]);