<dl class="c-info">
<? foreach($p->info()->yaml() as $info): ?>
  <dt class="c-info__term"><?= $info['term'] ?></dt>
  <dd class="c-info__desc"><?= $info['description'] ?></dd>
<? endforeach ?>
</dl>
