<? snippet('_header') ?>

<article>
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        snippet('page/navigation');

        snippet('content');
    ?>
</article>

<? snippet('_footer') ?>
