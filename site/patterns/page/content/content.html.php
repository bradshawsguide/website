<div class="c-page__content">
<?
  if($p->hasImages()) {
    pattern('common/poster', ['p' => $p]);
  }

  if($p->info()->isNotEmpty()) {
    pattern('common/info', ['p' => $p]);
  } else {
    // temporary
    echo kirbytext($p->meta());
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
