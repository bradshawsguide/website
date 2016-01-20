<? snippet('_header') ?>

<article class="c-page">
    <?
        snippet('breadcrumb', array(
            'parent' => $page->company()
        ));

        snippet('page/header', array(
            'title' => $page->title()
        ));

        snippet('content');

        snippet('routemap');

        snippet('section-related');

        snippet('shorturl');
    ?>
</article>

<? snippet('_footer') ?>
