<? if (isset($modifier)): ?>
<div class="c-page__content c-page__content--<?= $modifier ?>">
<? else: ?>
<div class="c-page__content">
<? endif ?>
<?
  if($p->info()->isNotEmpty()) {
    pattern('common/info', ['p' => $p]);
  }
?>

  <div class="s-prose">
    <?= kirbytext($p->text()) ?>
  </div>

<?
  if($p->distances()->isNotEmpty()) {
    pattern('common/distances', ['p' => $p]);
  }
?>
</div>
