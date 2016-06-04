<? if (isset($modifier)): ?>
<div class="c-page__content c-page__content--<?= $modifier ?>">
<? else: ?>
<div class="c-page__content">
<? endif ?>
<?
  if($p->info()->isNotEmpty()) {
    pattern('scopes/info', ['p' => $p]);
  }

  if($p->text()->isNotEmpty()) {
    pattern('scopes/prose', ['p' => $p]);
  }

  if($p->distances()->isNotEmpty()) {
    pattern('scopes/distances', ['p' => $p]);
  }
?>
</div>
