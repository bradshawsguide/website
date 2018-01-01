<div class="c-search">
    <form class="c-search__form" id="search" role="search" action="/search" hidden>
        <div class="c-search__inner">
            <input class="c-search__input" type="search" name="q" placeholder="e.g. Brighton, London Bridge…" value="<?= esc(get('q')) ?>" title="Search <?= $site->title() ?>">
            <button class="c-search__submit" type="submit">
                <?php pattern('common/icon', [
                    'glyph' => 'search',
                    'label' => 'Submit search query'
                ]) ?>
            </button>
            <button class="c-search__geo" type="button" data-geo>
                <?php pattern('common/icon', [
                    'glyph' => 'locate',
                    'label' => 'Show stations near me'
                ]) ?>
            </button>
            <button class="c-search__dismiss" type="button" aria-label="Dismiss search form">✕</button>
        </div>
    </form>
</div>
