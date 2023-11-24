<form class="<?= classList('c-inquire', $modifiers ?? null) ?>" role="search" action="/search">
    <fieldset class="c-inquire__body">
        <legend class="c-inquire__header">
            <span class="c-inquire__title"><?= $title ?></span>
        </legend>
        <div class="c-inquire__main">
            <input class="c-inquire__input" type="search" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…" value="<?= esc(get('q', '')) ?>">
            <button class="c-inquire__button" type="submit">
                <?php snippet('icon', [
                    'glyph' => 'search'
                ]) ?>
                <span class="c-inquire__label u-hidden-upto-medium">Search</span>
            </button>
            <button class="c-inquire__button" type="button" data-geo>
                <?php snippet('icon', [
                    'glyph' => 'locate'
                ]) ?>
                <span class="c-inquire__label u-hidden-upto-medium">Places near me</span>
            </button>
        </div>
    </fieldset>
</form>
