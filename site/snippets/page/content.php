<div class="c-page__content">
<?php
    if (!$page->isHomePage()) {
        if ($page->info()->isNotEmpty() || $page->notes()->isNotEmpty()) {
            snippet('scope/info', [
                'info' => $page->info()->yaml(),
                'notes' => $page->notes()->yaml()
            ]);
        }

        $content = $content ?? $page->text();
        if ($content != '') {
            snippet('scope/prose', [
                'content' => $content,
                'proseModifiers' => $proseModifiers ?? null
            ]);

            if (!isset($editable)) {
                snippet('edit');
            }
        }
    } else {
        foreach ($pages->find('sections')->children() as $section) {
            $sectionUrl = '/routes/section:'.$section->uid();
            $routesCount = size($section->routes());
            $continue = '';

            if ($routesCount > 0) {
                $link = Html::a($sectionUrl, $routesCount.' routes');
                $text = Html::tag('strong', [$link]);
                $continue = Html::tag('p', [$text]);
            }

            $title = Html::a($sectionUrl, $section->title(), [
                'aria-label' => $section->label()
            ]);

            snippet('section/text', [
                'level' => 3,
                'title' => $title,
                'text' => $section->desc().$continue
            ]);
        };
    }
?>
</div>
