<?php if (count($items)): ?>
    <section class="c-section c-section--routes">
        <?= brick('h'.$level)->html($title)->attr('class', 'c-section__title') ?>
        <?php
            pattern('common/route-list', [
                'routes' => $items
            ])
        ?>
    </section>
<?php endif ?>
