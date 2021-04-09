<?

Kirby::plugin('perpetualgrimace/bgimg', [
	'blueprints' => [
		'blocks/bgimg' => __DIR__ . '/blueprints/blocks/bgimg.yml'
	],
	'snippets' => [
		'blocks/bgimg' => __DIR__ . '/snippets/blocks/bgimg.php'
	],
]);