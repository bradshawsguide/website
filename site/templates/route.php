<? snippet('_header') ?>

<article>
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        snippet('page/parent', array(
            'parent' => $page->company()
        ));

        snippet('content');

        snippet('routemap');

        snippet('section-related');

        snippet('shorturl');
    ?>
</article>

<? snippet('_footer') ?>
