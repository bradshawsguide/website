<div class="s-distances">
  <table>
    <caption>Distances of Places from <?= smartypants($p->title()) ?></caption>
    <thead>
      <tr>
        <th>To:</th>
        <th>Miles.</th>
      </tr>
    </thead>
    <tbody>
    <? foreach($p->distances()->yaml() as $distance): ?>
      <tr>
        <td><span><?= kirbytextRaw($distance['location']) ?></span></td>
        <td><?= $distance['miles'] ?></td>
      </tr>
    <? endforeach ?>
    </tbody>
  </table>
</div>
