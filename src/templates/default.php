<?php
snippet('head');

pattern('common/header', [
    'title' => $page->title()
]);

pattern('common/page/content', [
    'editable' => false
]);

snippet('foot');
