<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <section>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>
<?          
            $type = "stations";
            snippet('alphabetise', array('type' => $type))
?>
        </section>
<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>