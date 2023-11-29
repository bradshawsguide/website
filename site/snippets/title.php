<?= Html::tag(
    "h" . ($level ?? 1),
    [kti($title)],
    [
        "class" => $class ?? null,
        "id" => $id ?? null,
    ]
    );
