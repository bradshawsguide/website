<?php
snippet('head');

pattern('common/page/header', [
    'title' => $page->title()
]);

pattern('common/page/content', [
    'editable' => false
]);

snippet('foot');
