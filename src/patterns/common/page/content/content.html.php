<div class="c-page__content">
<?php
    if (!$page->isHomePage()) {
        if (!$page->info()->empty() || !$page->notes()->empty()) {
            pattern('scopes/info', [
                'info' => $page->info()->yaml(),
                'notes' => $page->notes()->yaml()
            ]);
        }

        if ($page->text() != '') {
            pattern('scopes/prose', [
                'content' => $page->text(),
                'proseModifiers' => $proseModifiers
            ]);

            if (!isset($editable)) {
                pattern('common/edit');
            }
        }
    } else {
        foreach (sections() as $section) {
            $routesCount = count($section['routes']);
            $continue = brick('p');

            if ($routesCount > 0) {
                $continue->html(html::a($section['url'], $routesCount.' routes'));
            }

            $title = brick('a');
            $title->attr('href', $section['url']);
            $title->attr('aria-label', $section['label']);
            $title->html($section['title']);

            pattern('common/section/text', [
                'level' => 3,
                'title' => $title,
                'text' => $section['desc'].$continue
            ]);
        };
    }
?>
</div>
