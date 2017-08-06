<?
  if($page->hasImages()) {
    pattern('scopes/image', [
      'image' => $page->image()
    ]);
  }

  if(!$page->info()->empty() || !$page->notes()->empty()) {
    pattern('scopes/info', [
      'info' => $page->info()->yaml(),
      'notes' => $page->notes()->yaml()
    ]);
  }

  if ($page->type() == 'child') {
    pattern('scopes/navigation', [
      'items' => $page->siblings()
    ]);
  } else {
    pattern('scopes/navigation', [
      'items' => $page->children()
    ]);
  }

  if(!$page->stops()->empty()) {
    pattern('common/routemap', [
      'stops' => $page->stops()->yaml()
    ]);
  }

  if(!$page->text()->empty()) {
    pattern('scopes/prose', [
      'content' => $page->text()
    ]);
  }

  if(!$page->distances()->empty()) {
    pattern('scopes/distances', [
      'title' => 'Distances of Places from '.$page->title(),
      'distances' => $page->distances()->yaml()
    ]);
  }
?>
