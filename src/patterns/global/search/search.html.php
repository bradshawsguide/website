<div class="c-search">
    <form class="c-search__form" id="search" role="search" action="/search" hidden>
        <div class="c-search__inner">
            <label class="c-search__label" for="query">Search <?= $site->title() ?></label>
            <button class="c-search__dismiss" type="button" aria-label="Dismiss search form">✕</button>
            <input class="c-search__input" type="search" id="query" name="q" placeholder="e.g. Brighton, London Bridge…" value="<?= esc($query) ?>">
            <button class="c-search__submit" type="submit">
                <?php pattern('common/icon', [
                    'glyph' => 'search',
                    'label' => 'Submit search query'
                ]) ?>
            </button>
            <button class="c-search__geo" type="button">
                <?php pattern('common/icon', [
                    'glyph' => 'locate',
                    'label' => 'Show stations near me'
                ]) ?>
            </button>
        </div>
    </form>
</div>
