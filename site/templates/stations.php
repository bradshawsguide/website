<? snippet('header') ?>
<? snippet('banner') ?>
<? $type = "stations"?>

    <main role="main">
        <div class="container">
            <h1><?= smartypants($page->title()) ?></h1>
<? snippet('alphabetise', array('type' => $type)) ?>
        </div>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>