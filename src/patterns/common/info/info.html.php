<dl class="c-info">
<? foreach($p->info()->yaml() as $info): ?>
  <dt class="c-info__term"><?= $info['term'] ?></dt>
  <? if(isset($info['desc'])): ?>
  <dd class="c-info__desc"><?= $info['desc'] ?></dd>
  <? endif ?>
<? endforeach ?>
</dl>
