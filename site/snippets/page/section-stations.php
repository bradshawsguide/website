<?
    switch ($context) {
        case 'company':
            $title = "Stations served";
            break;
        case 'region':
            $title = "Stations in the county";
            break;
    }
?>
<section>
    <h1><?= $title ?></h1>
    <?
        snippet('alphabetise', array('search' => $stations));
    ?>
</section>
