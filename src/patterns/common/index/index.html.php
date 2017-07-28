<? foreach(alphabetise($items->sortby('title')) as $letter => $items): ?>
  <section class="c-index" id="<?= $letter ?>">
    <h1 class="c-index__title"><?= str::upper($letter) ?></h1>
    <ul class="c-list c-list--columns">
    <? foreach($items as $item): ?>
      <li class="c-list__item">
        <? $title = (!$item->title_short()->empty()) ? $item->title_short() : $item->title(); ?>
        <a href="<?= $item->url() ?>"><?= smartypants($title) ?></a>
      </li>
    <? endforeach ?>
    </ul>
  </section>
<? endforeach ?>
