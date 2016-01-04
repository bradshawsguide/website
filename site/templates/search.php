<? snippet('_header') ?>

<section>
    <?
        snippet('page/header', array('title' => "Search results for ‘".esc($query)."’"));

        if($results && $results->count()) {
            snippet('results');

            snippet('pagination', array('pagination' => $results->pagination()));
        } else {
            echo "<p>No results for <strong>".esc($query)."</strong></p>";
        }
    ?>

</section>

<? snippet('_footer') ?>
