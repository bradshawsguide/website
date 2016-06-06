<form class="c-search" role="search" action="/search">
  <fieldset class="c-search__main">
    <legend>Search <?= $site->title() ?></legend>
    <input class="input" type="search" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…"<? if(isset($search)): ?> value="<?= esc($query) ?><? endif ?>"/>
    <input class="button" type="submit" value="Search"/>
  </fieldset>
</form>
