<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <div class="container cover">
            <?= kirbytext($page->text()) ?>
        </div>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>