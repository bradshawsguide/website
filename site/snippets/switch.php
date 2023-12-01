<nav class="c-switch" aria-label="<?= $title ?>">
    <ul>
        <?php foreach ($switches as $switch): ?>
            <li>
                <a href="<?= "?{$queryName}={$switch["uid"]}" ?>"
                    <?= ariacurrent(get($queryName) == $switch["uid"]) ?>>
                    <?= $switch["label"] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
