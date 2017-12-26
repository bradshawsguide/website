<aside class="s-info">
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
        <dd><?= kirbytextraw(smartypants($item['desc'])) ?></dd>
        <?php endif ?>
    <?php endforeach ?>
    </dl>
<?php endif ?>
</aside>
