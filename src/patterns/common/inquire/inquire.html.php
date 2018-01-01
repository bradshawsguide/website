<form class="c-inquire" role="search" action="/search">
    <fieldset>
        <legend class="c-inquire__title"><?= $title ?></legend>
        <div class="c-inquire__main">
            <input class="c-inquire__input" type="search" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…" value="<?= esc(get('q')) ?>">
            <button class="c-inquire__button" type="submit">
                <?php pattern('common/icon', [
                    'glyph' => 'search'
                ]) ?>
                <span class="c-inquire__label">Search</span>
            </button>
            <button class="c-inquire__button" type="button" data-geo>
                <?php pattern('common/icon', [
                    'glyph' => 'locate'
                ]) ?>
                <span class="c-inquire__label">Places near me</span>
            </button>
        </div>
    </fieldset>
</form>
