<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('alphabetise', array('type' => 'stations')); ?>
</section>

<? snippet('_footer') ?>
