<?
    switch ($context) {
        case 'company':
            $title = "Routes operated";
            break;
        case 'station':
            $title = "Routes serving the station";
            break;
    }
?>
<section>
    <h1><?= $title ?></h1>
    <?
        snippet('listing', array('items' => $routes));
    ?>
</section>
