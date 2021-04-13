<?

Kirby::plugin('perpetualgrimace/logogrid', [
	'blueprints' => [
		'blocks/logogrid' => __DIR__ . '/blueprints/blocks/logogrid.yml'
	],
	'snippets' => [
		'blocks/logogrid' => __DIR__ . '/snippets/blocks/logogrid.php'
	],
]);