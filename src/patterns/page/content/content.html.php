<div class="c-page__content">
<?
  if($p->hasImages()) {
    pattern('scopes/image', [
      'image' => $p->image()
    ]);
  }

  if(!$p->info()->empty() || !$p->notes()->empty()) {
    pattern('scopes/info', ['p' => $p]);
  }

  pattern('common/navigation', ['p' => $p]);

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
    pattern('scopes/distances', ['p' => $p]);
  }
?>
</div>
