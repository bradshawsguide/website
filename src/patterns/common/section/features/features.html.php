<?php if (count($items)): ?>
    <section class="<?= classList('c-section', $modifiers) ?>">
        <?= brick('h'.$level)->html($title)->attr('class', 'c-section__title') ?>
        <ul class="c-list c-list--grid">
            <?php foreach ($items as $item):?>
            <li class="c-list__item">
                <?php
                    pattern('common/feature', [
                        'item' => $item
                    ]);
                ?>
            </li>
            <?php endforeach ?>
        </ul>
    </section>
<?php endif ?>
