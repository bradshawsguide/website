<? if($page->distances()->isNotEmpty()): ?>
    <table>
        <summary>Distances of Places from <?= smartypants($page->title()) ?></summary>
        <thead>
            <tr>
                <th></th>
                <th>Miles.</th>
            </tr>
        </thead>
        <tbody>
            <? foreach($page->distances()->yaml() as $distance): ?>
            <tr>
                <td><?= kirbytextRaw($distance['location']) ?></td>
                <td><?= $distance['miles'] ?></td>
            </tr>
            <? endforeach ?>
        </tbody>
    </table>
<? endif ?>
