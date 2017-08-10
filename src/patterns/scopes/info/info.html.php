<div class="c-info">
<? foreach($notes as $note): ?>
  <p><?= $note ?></p>
<? endforeach ?>
<? if(count($info)): ?>
  <dl>
  <? foreach($info as $item): ?>
    <dt><?= smartypants($item['term']) ?></dt>
    <? if(isset($item['desc'])): ?>
    <dd><?= smartypants($item['desc']) ?></dd>
    <? endif ?>
  <? endforeach ?>
  </dl>
<? endif ?>
</div>
