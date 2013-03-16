<? snippet('header') ?>
<? snippet('banner') ?>
<? $type = "stations"?>

    <main role="main">
        <section class="container">
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>
<?          snippet('alphabetise', array('type' => $type)) ?>
        </section>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>