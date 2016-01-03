<ul>
<? foreach($results as $result): ?>
    <?
    $type = $result->parent()->title();
    if($type == "Stations"):
        $type = "Station";
    elseif($type == "Routes"):
        $type = "Route";
    elseif($type == "Regions"):
        $type = "Region";
    elseif($type == "Railway Companies"):
        $type = "Railway Company";
    endif
    ?>
    <li>
        <a href="<?= $result->url() ?>">
            <h2><?= html($result->title()); ?> <em><?= $type ?></em></h2>
            <p><?= excerpt($result->text(), $length=140); ?></p>
            <?= server::get('server_name'); ?><?= $result->url() ?>
        </a>
    </li>
<? endforeach ?>
</ul>
