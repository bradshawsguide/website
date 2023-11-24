<table class="s-distances">
    <caption><?= smartypants($title ?? 'Distances of Places from the Station') ?></caption>
    <thead>
        <tr>
            <th class="u-hidden">To:</th>
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
