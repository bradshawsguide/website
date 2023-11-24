<b-dialog class="c-search" id="search" aria-label="Search">
    <b-dialog-toggle action="close" hidden>
        <?php snippet('icon', ['glyph' => 'close']) ?>
        <span class="u-hidden">Close search</span>
    </b-dialog-toggle>

    <search>
        <form action="/search">
            <input type="search" name="q" placeholder="e.g. Brighton, London Bridge…" value="<?= esc(get('q', '')) ?>" title="Search <?= $site->title() ?>">
            <button type="submit">
                <?php snippet('icon', [
                    'glyph' => 'search'
                ]) ?>
                <span class="u-hidden-upto-medium">Search</span>
            </button>
            <button type="button" data-geo>
                <?php snippet('icon', [
                    'glyph' => 'locate'
                ]) ?>
                <span class="u-hidden-upto-medium">Stations near me</span>
            </button>
        </form>
    </search>
</b-dialog>
