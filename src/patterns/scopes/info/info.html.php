<div class="c-info">
<? foreach($notes as $note): ?>
  <p><?= $note ?></p>
<? endforeach ?>
<? if(count($info)): ?>
  <dl>
  <? foreach($info as $item): ?>
    <? if(isset($item['term'])): ?>
    <dt><?= smartypants($item['term']) ?></dt>
    <? endif ?>
    <? if(isset($item['desc'])): ?>
    <dd><?= kirbytextraw(smartypants($item['desc'])) ?></dd>
    <? endif ?>
  <? endforeach ?>
  </dl>
<? endif ?>
</div>
