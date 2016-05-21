<div class="c-page__content">
<?
  if($page->hasImages()) {
    pattern('common/poster');
  }

  if($page->info()->isNotEmpty()) {
    pattern('common/info');
  } else {
    // temporary
    echo kirbytext($page->meta());
  }
?>

  <div class="s-prose">
    <?= kirbytext($page->text()) ?>
  </div>

<?
  if($page->distances()->isNotEmpty()) {
    pattern('common/distances');
  }
?>
</div>
