<form class="<?= classList('c-inquire', $modifiers ?? null) ?>" role="search" action="/search">
    <fieldset class="c-inquire__body">
        <legend class="c-inquire__header">
            <span class="c-inquire__title"><?= $title ?></span>
        </legend>
        <div class="c-inquire__main">
            <input class="c-inquire__input" type="search" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…" value="<?= esc(get('q', '')) ?>">
            <button class="c-inquire__button" type="submit">
                <b-icon name="search"></b-icon>
                <b-visually-hidden>Search</b-visually-hidden>
            </button>
            <button class="c-inquire__button" type="button" data-geo>
                <b-icon name="locate"></b-icon>
                <b-visually-hidden>Places near me</b-visually-hidden>
            </button>
        </div>
    </fieldset>
</form>
