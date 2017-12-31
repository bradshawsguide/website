<form role="search" action="/search">
    <fieldset>
        <legend>Search <?= $site->title() ?></legend>
        <input type="search" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…" value="<?= esc(get('q')) ?>">
        <input type="submit" value="Search">
    </fieldset>
</form>
