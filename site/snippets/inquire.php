<search class="c-inquire"<?php e(
    $background,
    Html::attr("style", "--background: url({$background})", before: " "),
); ?>>
    <form action="/search">
        <label for="q"><?= $title ?></label>
        <input class="c-inquire__input" type="search" id="q" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…" value="<?= esc(
            get("q", ""),
        ) ?>">
        <button type="submit">
            <b-icon name="search"></b-icon>
            <b-visually-hidden>Search</b-visually-hidden>
        </button>
        <b-locate label="Places near me"></b-locate>
    </form>
</search>
