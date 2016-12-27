<details class="c-interchange">
  <summary class="c-interchange__title">Interchange</summary>
  <ul class="c-interchange__lines">
<?
  foreach ($routes as $branch):
    $branch = page('routes/'.$branch);

    if ($page->url() != $branch->url()):
?>
      <li class="c-routemap__branch">
        <?= html::a($branch->url(), $branch->title()->smartypants()) ?>
      </li>
<?
    endif;
  endforeach
?>
  </ul>
</details>
