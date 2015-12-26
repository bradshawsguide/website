<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
<section>
    <header>
        <h1><?= smartypants($page->title()) ?></h1>
    </header>
    <? snippet('alphabetise', array('type' => 'stations')); ?>
</section>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>
