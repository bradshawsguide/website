<div class="s-info u-pull-right">
  <? if($p->notes()->isNotEmpty()): ?>
    <p>
      <? foreach($p->notes()->yaml() as $note): ?>
        <?= $note ?>
      <? endforeach ?>
    </p>
  <? endif ?>
  <dl>
  <? foreach($p->info()->yaml() as $info): ?>
    <dt><?= smartypants($info['term']) ?></dt>
    <? if(isset($info['desc'])): ?>
    <dd><?= smartypants($info['desc']) ?></dd>
    <? endif ?>
  <? endforeach ?>
  </dl>
</div>
