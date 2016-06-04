<dl class="s-info">
<? foreach($p->info()->yaml() as $info): ?>
  <dt><?= $info['term'] ?></dt>
  <? if(isset($info['desc'])): ?>
  <dd><?= $info['desc'] ?></dd>
  <? endif ?>
<? endforeach ?>
</dl>
