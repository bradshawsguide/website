<table class="c-distances">
    <caption class="c-distances__title"><?= smartypants($title) ?></caption>
    <thead>
        <tr>
            <th>To:</th>
            <th>Miles.</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($distances as $distance): ?>
        <tr>
            <td><span><?= kirbytextRaw($distance['location']) ?></span></td>
            <td><?= $distance['miles'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
