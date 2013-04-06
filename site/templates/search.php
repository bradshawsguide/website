<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
<?
    $search = new search(array(
        'searchfield' => 'q',
        'ignore' => array('search', 'error', 'home'),
        'words' => true,
        'fields' => array('title', 'text'),
        'score' => array('title' => 10, 'route' => 2, 'text' => 1),
        'paginate' => 10
    ));

    $results = $search->results();
?>
        <section>
            <header>
                <h1>Search results for &#8216;<?= $search->query(); ?>&#8217;</h1>
            </header>

<?          if($results): ?>
            <ul>
<?              foreach($results as $row):
                    $type = $row->parent()->title();
                    if($type == "Stations"):
                        $type = "Station";
                    elseif($type == "Routes"):
                        $type = "Route";
                    elseif($type == "Regions"):
                        $type = "Region";
                    elseif($type == "Railway Companies"):
                        $type = "Railway Company";
                    endif
?>
                <li class="result">
                    <h2><a href="<?= $row->url() ?>"><?= html($row->title()); ?></a> <em class="caption"><?= $type ?></em></h2>
                    <p><?= excerpt($row->text(), $length=140); ?></p>
                    <a href="<?= $row->url() ?>"><?= server::get('server_name'); ?><?= $row->url() ?></a>
                </li>
<?              endforeach ?>
            </ul>
<?          snippet('pagination', array('pagination' => $results->pagination())) ?>
<?          elseif($search->query()): ?>
            <p>No results for <strong><?= html($search->query()) ?></strong></p>
<?          endif ?>
        </section>
<? if(!isset($_GET['ajax'])) { snippet('_footer', array('search' => $search)); } ?>