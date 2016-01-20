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
<section class="c-section c-section--stations">
    <h1 class="c-section__title"><?= $title ?></h1>
    <?
        snippet('alphabetise', array('search' => $stations));
    ?>
</section>
