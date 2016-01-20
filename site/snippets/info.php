<dl class="c-info">
<? foreach($page->info()->yaml() as $info): ?>
    <dt class="c-info__term"><?= $info['term'] ?></dt>
    <dd class="c-info__desc"><?= $info['description'] ?></dd>
<? endforeach ?>
</dl>
