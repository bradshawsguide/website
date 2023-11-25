<table class="s-distances">
    <caption>
        <?= kti($title ?? 'Distances of Places from the Station') ?>
    </caption>
    <thead>
        <tr>
            <th><b-visually-hidden>To:</b-visually-hidden></th>
            <th>Miles.</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($distances as $distance): ?>
        <tr>
            <td><span><?= kti($distance['location']) ?></span></td>
            <td><?= $distance['miles'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
