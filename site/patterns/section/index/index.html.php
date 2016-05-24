<?
if($items && $items->count()):
  foreach(alphabetise($items->sortby('title')) as $letter => $items): ?>
    <section class="c-section c-section--index" id="<?= $letter ?>">
      <h1 class="c-section__title"><?= str::upper($letter) ?></h1>
      <ul class="c-list">
      <?
        foreach($items as $item):
          if (!$item->short_title()->empty()) {
            $title = $item->short_title();
          } else {
            $title = $item->title();
          };
      ?>
        <li class="c-list__item">
          <a href="<?= $item->url() ?>"><?= smartypants($title) ?></a>
        </li>
      <? endforeach; ?>
      </ul>
    </section>
<?
  endforeach;
endif;
?>
