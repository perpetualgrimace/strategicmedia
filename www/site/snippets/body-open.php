<?
// get template
$template = str_replace('.', '-', $page->intendedTemplate()) . ' ';

// get slug
if ($page->slug() != $template) {
  $slug = $page->slug() . ' ';
} else {
  $slug = '';
}

// put it all together
$bodyClasses = $template . $slug;

?>

<body class="<?= $bodyClasses ?>">
