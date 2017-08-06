<?

$page = page('stations/forest-hill');

return [
  'defaults' => [
    'title' => $page->title(),
    'notes' => $page->notes(),
    'subtitle' => $page->title_later()
  ]
];
