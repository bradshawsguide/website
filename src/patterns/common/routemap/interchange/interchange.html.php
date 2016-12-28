<ul class="c-routemap__interchange">
<?
foreach ($routes as $branch):
  $branch = page('routes/'.$branch);

  if ($page->url() != $branch->url()):
?>
  <li>
    <?= html::a($branch->url(), $branch->title()->smartypants()) ?>
  </li>
<?
  endif;
endforeach
?>
</ul>
