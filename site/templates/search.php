<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => "Search results for ‘".esc($query)."’")) ?>

<? if($results): ?>
    <? snippet('results') ?>
    <? snippet('pagination', array('pagination' => $results->pagination())) ?>
<? elseif($search->query()): ?>
    <p>No results for <strong><?= html($search->query()) ?></strong></p>
<? endif ?>

</section>

<? snippet('_footer') ?>
