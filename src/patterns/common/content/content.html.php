<div class="c-content">
<?
  if($p->hasImages()) {
    pattern('scopes/image', [
      'image' => $p->image()
    ]);
  }

  if(!$p->info()->empty() || !$p->notes()->empty()) {
    pattern('scopes/info', [
      'info' => $p->info()->yaml(),
      'notes' => $p->notes()->yaml()
    ]);
  }

  if ($p->type() == 'child') {
    pattern('scopes/navigation', [
      'items' => $p->siblings()
    ]);
  } else {
    pattern('scopes/navigation', [
      'items' => $p->children()
    ]);
  }

  if(isset($stops) && $stops != false) {
    pattern('common/routemap', [
      'p' => $p,
      'stops' => $p->stops()->yaml()
    ]);
  }

  if(!$p->text()->empty()) {
    pattern('scopes/prose', [
      'content' => $p->text()
    ]);
  }

  if(!$p->distances()->empty()) {
    pattern('scopes/distances', [
      'p' => $p
    ]);
  }
?>
</div>
