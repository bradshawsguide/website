<? snippet('_header') ?>

    <main role="main">
        <section class="container">
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>
<?          
            $type = "stations";
            snippet('alphabetise', array('type' => $type))
?>
        </section>
    </main><!--/@main-->

<? snippet('_footer') ?>