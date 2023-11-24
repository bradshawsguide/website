<aside class="s-info u-pull-right">
<?php foreach ($notes as $note): ?>
    <p><?= $note ?></p>
<?php endforeach ?>
<?php if (count($info)): ?>
    <dl>
    <?php foreach ($info as $item): ?>
        <?php if (isset($item['term'])): ?>
        <dt><?= smartypants($item['term']) ?></dt>
        <?php endif ?>
        <?php if (isset($item['desc'])): ?>
        <dd><?= smartypants(kt($item['desc'])) ?></dd>
        <?php endif ?>
    <?php endforeach ?>
    </dl>
<?php endif ?>
</aside>
