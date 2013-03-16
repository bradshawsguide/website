<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <section class="container">
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

<?=         kirbytext($page->text()) ?>

<?          if($page->related()): ?>
            <section>
                <h1>Related</h1>
                <ul class="listing">
<?                  foreach(related($page->related()) as $related): ?>
                    <li><a href="<?= $related->url() ?>"><?= smartypants($related->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
            </section>
<?          endif ?>
        </section><!--/.container-->
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>