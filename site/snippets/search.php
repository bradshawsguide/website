<dialog open class="c-search" id="search" aria-label="Search">
    <search>
        <form action="/search">
            <input type="search" name="q" placeholder="e.g. Brighton, London Bridge…" value="<?= esc(
                get("q", ""),
            ) ?>" title="Search <?= $site->title() ?>">
            <button type="submit">
                <b-icon name="search"></b-icon>
                <b-visually-hidden>Search</b-visually-hidden>
            </button>
        </form>
    </search>

    <b-toggle action="close" icon="close" label="Close search"></b-toggle>
</dialog>
<script>document.querySelector("#search").close()</script>
