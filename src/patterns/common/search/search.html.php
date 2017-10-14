<form role="search" action="/search">
    <fieldset>
        <legend>Search <?= $site->title() ?></legend>
        <input type="search" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…"<?php if (isset($search)): ?> value="<?= esc($query) ?><?php endif ?>"/>
        <input type="submit" value="Search"/>
        <input type="hidden" name="type" value="station"/>
    </fieldset>
</form>
