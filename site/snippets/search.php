<b-dialog class="c-search" id="search" aria-label="Search">
    <b-dialog-toggle action="close" hidden>
        <?php snippet('icon', ['glyph' => 'close']) ?>
        <b-visually-hidden>Close search<b-visually-hidden>
    </b-dialog-toggle>

    <search>
        <form action="/search">
            <input type="search" name="q" placeholder="e.g. Brighton, London Bridge…" value="<?= esc(get('q', '')) ?>" title="Search <?= $site->title() ?>">
            <button type="submit">
                <?php snippet('icon', [
                    'glyph' => 'search'
                ]) ?>
                <b-visually-hidden>Search</b-visually-hidden>
            </button>
            <button type="button" data-geo>
                <?php snippet('icon', [
                    'glyph' => 'locate'
                ]) ?>
                <b-visually-hidden>Stations near me</b-visually-hidden>
            </button>
        </form>
    </search>
</b-dialog>
