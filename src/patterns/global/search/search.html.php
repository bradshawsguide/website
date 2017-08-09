<div class="c-search" role="search">
  <form class="c-search__form" action="/search">
    <label class="c-search__label" for="query">Search <?= $site->title() ?></label>
    <input class="c-search__input" type="search" id="query" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…"<? if(isset($search)): ?> value="<?= esc($query) ?><? endif ?>"/>
    <button class="c-search__button" type="submit">
      <? pattern('common/icon', [
        'glyph' => 'search',
        'label' => 'Search'
      ]) ?>
    </button>
  </form>
</div>
