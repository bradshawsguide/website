<table class="c-distances">
  <caption class="c-distances__caption">Distances of Places from <?= smartypants($page->title()) ?></caption>
  <thead>
    <tr>
      <th></th>
      <th>Miles</th>
    </tr>
  </thead>
  <tbody>
    <? foreach($page->distances()->yaml() as $distance): ?>
    <tr>
      <td class="c-distances__location">
        <?= kirbytextRaw($distance['location']) ?>
      </td>
      <td class="c-distances__miles">
        <?= $distance['miles'] ?>
      </td>
    </tr>
    <? endforeach ?>
  </tbody>
</table>
