<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <section>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

<?          $items = $pages->find('countries')->children()->visible(); ?>
<?          if($items && $items->count()): ?>
<?              foreach($items as $item): ?>
                <h2><?= smartypants($item->title()) ?></h2>
<?              $country = $item->title();
                $regions = $pages->find('regions')->children()->filterBy('country', "$country")->sortBy('title', 'asc'); ?>
                <ul class="regions listing">
<?                  foreach($regions as $region): ?>
                    <li><a href="<?= $region->url() ?>"<? if ($region->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($region->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
<?              endforeach ?>
<?          endif ?>
        </section>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>