<?
  $path = str_replace('../', '', $page->root());
  $file = '/'.$page->template();
?>
<p class="c-edit">Spotted a mistake? <a href="<?= $host.$path.$file.$ext ?>" target="_blank" rel="noopener noreferrer">Suggest a correction on GitHub</a>.</p>
