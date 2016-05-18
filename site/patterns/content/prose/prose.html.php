<div class="s-prose">
<?
  if($page->hasImages()) {
    pattern('content/figure');
  }

  if($page->info()->isNotEmpty()) {
    pattern('content/info');
  } else {
    // temporary
    echo kirbytext($page->meta());
  }

  echo kirbytext($page->text());

  if($page->distances()->isNotEmpty()) {
    pattern('content/distances');
  }
?>
</div>
