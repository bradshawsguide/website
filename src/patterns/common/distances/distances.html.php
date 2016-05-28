<table class="c-distances">
  <caption class="c-distances__caption">Distances of Places from <?= smartypants($p->title()) ?></caption>
  <thead>
    <tr>
      <th></th>
      <th>Miles</th>
    </tr>
  </thead>
  <tbody>
    <? foreach($p->distances()->yaml() as $distance): ?>
    <tr class="c-distances__item">
      <td class="c-distances__location">
        <?= kirbytext($distance['location']) ?>
      </td>
      <td class="c-distances__miles">
        <?= $distance['miles'] ?>
      </td>
    </tr>
    <? endforeach ?>
  </tbody>
</table>
