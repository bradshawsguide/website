<b-dialog class="c-search" id="search" aria-label="Search">
    <b-toggle action="close" icon="close" label="Close search"></b-toggle>

    <search>
        <form action="/search">
            <input type="search" name="q" autofocus placeholder="e.g. Brighton, London Bridge…" value="<?= esc(get('q', '')) ?>" title="Search <?= $site->title() ?>">
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
