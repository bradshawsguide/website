<table class="c-distances">
  <caption class="c-distances__caption">Distances of Places from <?= smartypants($p->title()) ?></caption>
  <thead class="c-distances__header">
    <tr>
      <th class="c-distances__place u-hidden">Place</th>
      <th class="c-distances__miles">Miles.</th>
    </tr>
  </thead>
  <tbody class="c-distances__main">
  <? foreach($p->distances()->yaml() as $distance): ?>
    <tr>
      <td class="c-distances__place"><?= kirbytext($distance['location']) ?></td>
      <td class="c-distances__miles"><?= kirbytext($distance['miles']) ?></td>
    </tr>
  <? endforeach ?>
  </tbody>
</table>
