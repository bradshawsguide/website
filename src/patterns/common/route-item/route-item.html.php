<article class="c-route-item">
    <?php
        $title = html::a($item->url(), $item->shortTitle());
        echo brick('h'.$level)->html($title)->addClass('c-route-item__label');
        if (!$item->subtitle()->empty()) {
            echo brick('p')->html($item->subtitle())->addClass('c-route-item__desc');
        }
    ?>
</article>
