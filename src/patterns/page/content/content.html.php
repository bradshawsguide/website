<div class="c-page__content">
<?
  if($p->info()->isNotEmpty() || $p->notes()->isNotEmpty()) {
    pattern('scopes/info', ['p' => $p]);
  }

  if($p->hasImages()) {
    pattern('page/image', ['p' => $p]);
  };

  if($p->text()->isNotEmpty()) {
    pattern('scopes/prose', ['p' => $p]);
  }

  if($p->distances()->isNotEmpty()) {
    pattern('scopes/distances', ['p' => $p]);
  }
?>
</div>
