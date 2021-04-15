<?

// https://getkirby.com/docs/cookbook/extensions/table-of-contents
Kirby::plugin('k-cookbook/toc', [
  'fieldMethods' => [
    'anchorHeadlines' => function($field, $headlines = 'h2|h3') {

      $headlinesPattern = is_array($headlines) ? implode('|', $headlines) : $headlines;

      $field->value = preg_replace_callback('!<(' . $headlinesPattern . ')>(.*?)</\\1>!s', function ($match) {
        $id = Str::slug(Str::unhtml($match[2]));
        return '<' . $match[1] . ' id="' . $id . '">' . $match[2] . '</' . $match[1] . '>';
      }, $field->value);

      return $field;
    },
    'headlines' => function($field, $headline = 'h2') {

      preg_match_all('!<' . $headline . '.*?>(.*?)</' . $headline . '>!s', $field->kt()->value(), $matches);

      $headlines = new Collection();

      foreach ($matches[1] as $text) {
        $headline = new Obj([
          'id'   => $id = '#' . Str::slug(Str::unhtml($text)),
          'url'  => $id,
          'text' => trim(strip_tags($text)),
        ]);

        $headlines->append($headline->url(), $headline);
      }

      return $headlines;
    }
  ]
]);