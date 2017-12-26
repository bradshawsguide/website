<?php
    $src = kirby()->roots()->content().'/';
    $href = [
        'git' => 'https://github.com/bradshawsguide/content/edit/master',
        'path' => str_replace($src, '', $page->root()),
        'file' => $page->template().'.txt'
    ];
    $href = implode('/', $href);
?>
<p class="c-edit">Spotted a mistake? <a href="<?= $href ?>" target="_blank" rel="noopener noreferrer">Suggest a correction on GitHub</a>.</p>
