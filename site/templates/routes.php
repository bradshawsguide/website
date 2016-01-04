<? snippet('_header') ?>

<section>
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        $items = $pages->find('companies')->children()->sortBy('title');
        foreach($items as $item) {
            switch ($item->title()) {
                case 'Isle of Wight':
                    $object = $pages->findByURI('/regions/england/isle-of-wight');
                    break;
                case 'London':
                    $object = $pages->findByURI('/regions/england/london');
                    break;
                default:
                    $object = $item;
            }

            $company = $object->title();
            $routes = $pages->find('routes')->children()->filterBy('company', $company)->filterBy('text', '!=','');
            snippet('section-routes', array(
                'routes' => $routes,
                'context' => 'routes',
                'object' => $object
            ));
        }
    ?>
</section>

<? snippet('_footer') ?>
