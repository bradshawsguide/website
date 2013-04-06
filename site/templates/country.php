<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <article>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

<?          $country = $page->title();
            $search = $pages->find('regions')->children->filterBy('country', "$country")->sortBy('title', 'asc');
            
            if ($search != ""): ?>
            <section class="stations index">
                <h1>Regions in This Country</h1>
<?              $alphabetise = alphabetise($search);
                foreach($alphabetise as $letter => $items): ?>
                <h2 class="index"><?= str::upper($letter) ?></h2>
                <ul class="stations listing">
<?                  foreach($items as $item): ?>
                    <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
<?              endforeach ?>
<?          endif ?>
            </section>
<?          snippet('shorturl') ?>
<?          snippet('prevnext') ?>
        </article>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>