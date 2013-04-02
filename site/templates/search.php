<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>

<?
    $search = new search(array(
        'searchfield' => 'q',
        'ignore' => array('search', 'error'),
        'words' => true,
        'paginate' => 10
    ));

    $results = $search->results();
?>
        <section>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

            <form action="<?= thisURL() ?>">
                <input type="search" class="input" name="q" placeholder="Search&#8230;" value="<?= html($search->query()) ?>"/><!--
             --><input type="submit" class="button" value="Search"/>
            </form>

<?          if($results): ?>
<?          snippet('pagination', array('pagination' => $results->pagination())) ?>

            <ul>
<?              foreach($results as $row): ?>
                <li><a href="<?= $row->url() ?>"><?= html($row->title()) ?></a></li>
<?              endforeach ?>
            </ul>

<?          snippet('pagination', array('pagination' => $results->pagination())) ?>

<?          elseif($search->query()): ?>
            <p>No results for <strong><?= html($search->query()) ?></strong></p>
<?          endif ?>
        </section>
<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>