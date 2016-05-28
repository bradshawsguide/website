<footer class="c-page__footer">
<?
  pattern('common/shorturl', [
    'p' => $page
  ]);

  pattern('common/traverse', [
    'p' => $page,
    'title' => 'Section'.$page->section()
  ]);
?>
</footer>
