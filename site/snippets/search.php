<b-dialog class="c-search" id="search" aria-label="Search">
    <b-dialog-toggle action="close" hidden>
        <b-icon name="close"></b-icon>
        <b-visually-hidden>Close search<b-visually-hidden>
    </b-dialog-toggle>

    <search>
        <form action="/search">
            <input type="search" name="q" placeholder="e.g. Brighton, London Bridge…" value="<?= esc(get('q', '')) ?>" title="Search <?= $site->title() ?>">
            <button type="submit">
                <b-icon name="search"></b-icon>
                <b-visually-hidden>Search</b-visually-hidden>
            </button>
            <button type="button" data-geo>
                <b-icon name="locate"></b-icon>
                <b-visually-hidden>Stations near me</b-visually-hidden>
            </button>
        </form>
    </search>
</b-dialog>
