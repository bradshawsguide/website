<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', ['p' => $page]);

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
    pattern('section/routes', array(
      'routes' => $routes,
      'context' => 'routes',
      'object' => $object
    ));
  }
?>
</section>

<? snippet('foot') ?>
