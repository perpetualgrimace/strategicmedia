<?

Kirby::plugin('perpetualgrimace/textimg', [
	'blueprints' => [
		'blocks/textimg' => __DIR__ . '/blueprints/blocks/textimg.yml'
	],
	'snippets' => [
		'blocks/textimg' => __DIR__ . '/snippets/blocks/textimg.php'
	],
]);