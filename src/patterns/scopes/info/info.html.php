<div class="u-pull-right">
  <dl class="s-info">
  <? foreach($p->info()->yaml() as $info): ?>
    <dt><?= smartypants($info['term']) ?></dt>
    <? if(isset($info['desc'])): ?>
    <dd><?= smartypants($info['desc']) ?></dd>
    <? endif ?>
  <? endforeach ?>
  </dl>
</div>
