<?

Kirby::plugin('perpetualgrimace/testimonials', [
	'blueprints' => [
		'blocks/testimonials' => __DIR__ . '/blueprints/blocks/testimonials.yml'
	],
	'snippets' => [
		'blocks/testimonials' => __DIR__ . '/snippets/blocks/testimonials.php'
	],
]);