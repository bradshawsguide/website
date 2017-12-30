<div class="c-search">
    <button class="c-search__toggle" aria-controls="search__form" aria-expanded="false">Search</button>
    <form class="c-search__form" id="search__form" role="search" action="/search" hidden>
        <div class="c-search__inner">
            <label class="c-search__label" for="query">Search <?= $site->title() ?></label>
            <input class="c-search__input" type="search" id="query" name="q" placeholder="e.g. Brighton, London Bridge…"<?php if (isset($search)): ?> value="<?= esc($query) ?>"<?php endif ?>>
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
            <button class="c-search__dismiss" type="button" aria-label="Dismiss search form">✕</button>
        </div>
    </form>
</div>
