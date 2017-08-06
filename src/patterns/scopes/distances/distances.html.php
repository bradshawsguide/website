<div class="s-distances">
  <table>
    <caption><?= smartypants($title) ?></caption>
    <thead>
      <tr>
        <th>To:</th>
        <th>Miles.</th>
      </tr>
    </thead>
    <tbody>
    <? foreach($distances as $distance): ?>
      <tr>
        <td><span><?= kirbytextRaw($distance['location']) ?></span></td>
        <td><?= $distance['miles'] ?></td>
      </tr>
    <? endforeach ?>
    </tbody>
  </table>
</div>
