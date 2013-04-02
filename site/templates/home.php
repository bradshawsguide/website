<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>

        <section class="cover">
<?=         kirbytext($page->text()) ?>
        </section>

<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>