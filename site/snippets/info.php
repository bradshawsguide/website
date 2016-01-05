<dl>
<? foreach($page->info()->yaml() as $info): ?>
    <dt><?= $info['term'] ?></dt>
    <dd><?= $info['description'] ?></dd>
<? endforeach ?>
</dl>
