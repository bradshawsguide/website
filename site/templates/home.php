<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <section class="container cover">
<?=         kirbytext($page->text()) ?>
        </section><!--/.container-->
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>