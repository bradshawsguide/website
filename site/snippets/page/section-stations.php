<section>
    <h1>Stations in This County</h1>
    <?
        $search = $pages->find('stations')->children()->filterBy('region', $page->title())->sortBy('title', 'asc');
        snippet('alphabetise', array('search' => $search));
    ?>
</section>
