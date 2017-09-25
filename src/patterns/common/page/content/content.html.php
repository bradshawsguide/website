<div class="c-page__content">
<?
  if($page->hasImages()) {
    pattern('common/figure', [
      'image' => $page->image()
    ]);
  }

  if(!$page->info()->empty() || !$page->notes()->empty()) {
    pattern('common/aside/info', [
      'info' => $page->info()->yaml(),
      'notes' => $page->notes()->yaml()
    ]);
  }

  if(!$page->stops()->empty()) {
    pattern('common/aside/route', [
      'stops' => $page->stops()->yaml()
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

  if(!$page->text()->empty()) {
    pattern('scopes/prose', [
      'content' => $page->text()
    ]);

    if(!isset($editable)) {
      pattern('common/edit');
    }
  }
?>
</div>
