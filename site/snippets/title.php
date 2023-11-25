<?= Html::tag('h'.($level ?? 1), [smartypants($title)], [
    'class' => $class ?? null,
    'id' => $id ?? null
]) ?>
