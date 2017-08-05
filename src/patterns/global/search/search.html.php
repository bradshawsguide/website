<form class="c-search" role="search" action="/search">
  <label class="c-search__label">Search <?= $site->title() ?></label>
  <input class="c-search__input" type="search" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…"<? if(isset($search)): ?> value="<?= esc($query) ?><? endif ?>"/>
  <input class="c-search__button" type="submit" value="Search"/>
</form>
