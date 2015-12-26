<?php
        if (param('section')) {
            $alphabetise = alphabetise($page->children()->filterBy('section', params('section'))->sortby('title'), array('key' => 'title'));
        } else {
            $alphabetise = alphabetise($page->children()->sortby('title'), array('key' => 'title'));
        }
        foreach($alphabetise as $letter => $items):
?>

            <h2 class="index" id="<?= $letter ?>"><?= str::upper($letter) ?></h2>
            <ul class="<?= $type ?> listing">
<?php
            foreach($items as $item):
                if ($item->shorttitle()->isNotEmpty()) {
                    $title = $item->shorttitle();
                } else {
                    $title = $item->title();
                }
?>
                <li><a href="<?= $item->url() ?>"<? if ($item->text() == ""): ?> class="unremarkable"<? endif ?>><?= smartypants(html($title)) ?></a></li>
<?php       endforeach ?>
            </ul>
<?php   endforeach ?>
