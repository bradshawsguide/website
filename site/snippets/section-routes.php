<?
    switch ($context) {
        case 'company':
            $title = "Routes operated";
            break;
        case 'station':
            $title = "Routes serving the station";
            break;
        case 'routes':
            $title = $object->title();
            $url = $object->url();
    }

    if(isset($url)) {
        $heading = html::a($url, $title);
    } else {
        $heading = $title;
    }
?>
<section>
    <h1><?= $heading ?></h1>
    <?
        snippet('listing', array('items' => $routes));
    ?>
</section>
