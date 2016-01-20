<? snippet('_header') ?>

<article class="c-page">
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        snippet('page/navigation');

        snippet('content');
    ?>
</article>

<? snippet('_footer') ?>
