<? snippet('_header') ?>

<section>
    <header>
        <h1><?= smartypants($page->title()) ?></h1>
    </header>
    <? snippet('alphabetise', array('type' => 'stations')); ?>
</section>

<? snippet('_footer') ?>
